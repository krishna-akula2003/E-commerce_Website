<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8" %>
<%@ page import="java.sql.*" %>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up Result</title>
</head>
<body>
    <%
        String dbUrl = "jdbc:mysql://localhost:3306/uuu";
        String dbUser = "root";
        String dbPass = "root";

        String fullName = request.getParameter("fullName");
        String mobileNumber = request.getParameter("mobileNumber");
        String password = request.getParameter("password");

        String errorMessage = null;

        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection conn = DriverManager.getConnection(dbUrl, dbUser, dbPass);

            String insertQuery = "INSERT INTO uday(full_name, mobile_number, password) VALUES (?, ?, ?)";
            PreparedStatement preparedStatement = conn.prepareStatement(insertQuery);
            preparedStatement.setString(1, fullName);
            preparedStatement.setString(2, mobileNumber);
            preparedStatement.setString(3, password);

            int rowsInserted = preparedStatement.executeUpdate();
            if (rowsInserted <= 0) {
                errorMessage = "Sign up failed. Please try again.";
            }

            preparedStatement.close();
            conn.close();
        } catch (Exception e) {
            errorMessage = "An error occurred: " + e.getMessage();
        }
    %>

    <div>
        <h2>Sign Up Result</h2>
        <p>
            <% if (errorMessage != null) { %>
                <span style="color: red;"><%= errorMessage %></span>
            <% } else { %>
                Sign up successful! Welcome, <%= fullName %>!
            <% } %>
        </p>
        <a href="home.jsp">Go back to home page</a>
    </div>
</body>
</html>