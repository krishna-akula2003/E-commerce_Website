<%--
 Document : validate
 Created on : 18 Sep, 2020, 11:07:39 PM
 Author : Amar
--%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<html>
 <head>
 <title>LOGIN</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
 <link rel="stylesheet" type="text/css"
ref="vendor/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="fonts/font-awesome4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="css/util.css">
 <link rel="stylesheet" type="text/css" href="css/main.css">
 </head>
 <body>
 <div class="limiter">
 <div class="container-login100">
 <div class="wrap-login100">
 <div class="login100-pic js-tilt" data-tilt>
 <img src="images/img-01.png" alt="IMG">
 </div>
 <form class="login100-form validate-form" method="POST" 
action="validate.jsp">
 <span class="login100-form-title">
 Member Login
 </span>
 <div class="wrap-input100 validate-input" data-validate = "Valid 
email is required: ex@abc.xyz">
 <input class="input100" type="email" name="email" 
placeholder="Email" required>
 <span class="focus-input100"></span>
 <span class="symbol-input100">
 <i class="fa fa-envelope" aria-hidden="true"></i>
 </span>
</div>
<div class="wrap-input100 validate-input" data-validate = "Password is required">
<input class="input100" type="password" name="pass" placeholder="Password" required>
 <span class="focus-input100"></span>
 <span class="symbol-input100">
 <i class="fa fa-lock" aria-hidden="true"></i>
 </span>
 </div>
 <div class="container-login100-form-btn">
 <button class="login100-form-btn">Login</button>
 </div>
<div class="text-center p-t-12">
 <span class="txt1">Forgot</span>
 <a class="txt2" href="#">Username / Password?</a>
</div>
<div class="text-center p-t-136">
 <a class="txt2" href="#">Create your Account
 <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
 </a>
 </div>
 </form>
 </div>
 </div>
 </div>
 </body>
</html>