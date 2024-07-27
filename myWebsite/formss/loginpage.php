<html>
    <head>
        <link href="styles.css"  rel="stylesheet">
    </head>
    <body>
        <form action="" method="post" >
            <nav>
        <div class="top"> 
                SHOPPIFY                                                                                                          
            </div>
            </nav>
            <nav>
            <div class="login">
            <h1>LOGIN</h1>
            <label for="EMAIL">EMAIL:</label>
        <input type="email" name="email" class="main" required><br><br>
        <label for="password">PASSWORD:</label>
        <input type="password" name="password1" class="main" required><br>
        <input type="submit" value="Login">
        <br>
        <a href="reg.php">sign up</a>
            <?php
        $con=mysqli_connect("localhost","root","","reg1");
        if(!$con){
            echo "error";
        }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $email=$_POST["email"];
            $password=$_POST["password1"];
            $sql3="SELECT email from login5 where email='$email'";
            $sql2="SELECT password1 from login5 where email='$email'";
            $result=mysqli_query($con,$sql2);
            $result3=mysqli_query($con,$sql3);
                // echo mysqli_num_rows($result3);
                // checking whether user exists or not
                if(mysqli_num_rows($result3)==0){
                    echo "<br>";
                    echo "<br>";
                    echo "USER NOT FOUND";
                }
                else{
                //fetching all the results from the result to row
                $row=mysqli_fetch_assoc($result);
                $confirmpass=$row['password1'];
                // echo "$confirmpass";
                if($confirmpass!=$password){
                    echo "<br>";
                    echo "<br>";
                    echo "INCORRECT PASSWORD"; 
                }
                else{
                    session_start();
                    $_SESSION['user'] = $email;
                    header("Location: mainpage.php");
                }
            }
        }
        mysqli_close($con);
        ?>
            </div>
            </nav>
        </form>
    </body>
</html>