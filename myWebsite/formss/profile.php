<?php
    session_start();
    $user = $_SESSION["user"];
    $query = "select * from login5 where email='$user'";
    $conn=mysqli_connect("localhost","root","","reg1");
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="profile.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <strong>Email: <?php echo $row['email']; ?></strong>
        <strong>Mobile: <?php echo $row['mobile_number']; ?></strong>
        <strong>Pincode: <?php echo $row['pincode']; ?></strong>
        <strong>Address: <?php echo $row['address']; ?></strong>
    </div>
</body>
</html>