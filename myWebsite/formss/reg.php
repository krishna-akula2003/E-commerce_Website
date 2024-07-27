<html>
<head>
    <title>registration form</title>
    <link href="stylesr.css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm();">
    <script src="js/regi.js"></script>
    <div class="rr">
        <h1>REGISTRATION FORM</h1>
        <br>
        <br>
        <label for="email">EMAIL:</label>
        <input type="email" name="email" class="main2" required><br><br><br>
        <label for="number">MOBILE NUMBER:</label>
        <input type="number"id="number" name="number" class="main2" required><br><br><br>
        <label for="address">ADDRESS:</label>
        <input type="text" name="address" class="main2" required><br><br><br>
        <label for="pincode">PINCODE:</label>
        <input type="number" name="pincode" class="main2" required><br><br><br>
        <label for="password1">PASSWORD:</label>
        <input type="password" name="password1" class="main2" required><br><br><br>
        <label for="password2">REENTER PASSWORD:</label>
        <input type="password" name="password2" class="main2" required><br><br>
        <input type="submit" value="Register">
    </div>
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "reg1";
        $con = mysqli_connect($host,$username,$password,$database);
        if (!$con){
            die("Connection Failed: " . mysqli_connect_error());
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST["email"];
            $mobile_number = $_POST["number"];
            $address = $_POST["address"];
            $pincode = $_POST["pincode"];
            $password1 = $_POST["password1"];
            $password2 = $_POST["password2"];
            $sql = "SELECT * FROM login5 where email='$email'";
            $sql1 = "SELECT * FROM login5 where mobile_number='$mobile_number'";
            $result = mysqli_query($con, $sql);
            $result2 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($result) == 0 && mysqli_num_rows($result2) == 0) {
                if ($password1 == $password2){
                    $sql2 = "INSERT INTO login5 (email, mobile_number, address , pincode, password1, passsword2) VALUES ('$email', '$mobile_number', '$address', '$pincode', '$password1', '$password2')";
                    if(mysqli_query($con, $sql2)){
                        echo "<br>";
                        echo "SUCCESSFULLY REGISTERED";
                             header("Location: loginpage.php");
                        exit();
                    } else
                     {
                        echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
                    }
                } else {
                    echo "<br>";
                    echo "<br>";
                    echo "ENTER DIFFERENT PASSWORDS";
                }
            } else {
                echo "<br>";
                echo "USER ALREADY EXISTS";
            }
        }
        mysqli_close($con);
        ?>
    </form>
</body>
</html>