<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST['user_name'];
    $pass = $_POST['password'];

    if(!empty($username) && !empty($pass) && !is_numeric($username))
    {
        $query="select * from users where user_name='$username'limit 1";
        $result=mysqli_query($conn,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $pass)
                {
                    header("location: index.html");
                    die;
                }

            }
        }
        echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spm-tours</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h2>Log in to Spm Tours</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="user_name" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <input type="submit" value="Log In" class="submit-button">
        </form>
        <div class="signup-link">
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>


