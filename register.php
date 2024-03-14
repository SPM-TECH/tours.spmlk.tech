<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $username = $_POST['user_name'];
    $pass = $_POST['password'];
    $confirmpassword = $_POST['Cconfirm_password'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];

if(!empty($username) && !empty($pass) && !is_numeric($username) ){
    $query="insert into users (first_name,last_name,user_name,password,Cconfirm_Password,email,phone) 
    values ('$firstname','$lastname','$username','$pass','$confirmpassword','$Email','$Phone')";

    mysqli_query($conn, $query);

    echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
}
else 
{
    echo "<script type='text/javascript'> alert('Please Enter Valid Information`')</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spm-tours</title>
    <link type="text/css" rel="stylesheet" href="register-login.css">

     <!-- <link rel="manifest" href="site.webmanifest"> -->
     <link rel="shortcut icon" type="image/x-icon" href="img/spm-fav.png">
    <!-- Place favicon.ico in the root directory -->
</head>
<body>
    <div class="container">
        <h2>Register for Spm Tours</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="last_name" required>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="user_name" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirm_Password" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <input type="submit" value="Submit" class="submit-button">
        </form>
        <div class="signin-link">
            <p>Already have an account? <a href="login.php">Sign In</a></p>
        </div>
    </div>
</body>
</html>
