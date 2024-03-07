<?php
session_start();

include("db.php");

$errorMessage = ""; // Initialize error message variable

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['user_name'];
    $pass = $_POST['password'];

    if (!empty($username) && !empty($pass) && !is_numeric($username)) {
        $query = "select * from users where user_name='$username' limit 1";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] == $pass) {
                // Successful login
                if (isset($_SESSION['redirect'])) {
                    $destination = $_SESSION['redirect'];
                    unset($_SESSION['redirect']);
                    $destination_pages = array(
                        1 => "destination_details.php",
                        2 => "destination_details2.php",
                        3 => "destination_details3.php",
                        4 => "destination_details4.php"
                    );
                    if (array_key_exists($destination, $destination_pages)) {
                        header("location: " . $destination_pages[$destination]);
                        die;
                    } else {
                        // Handle invalid destination
                        $errorMessage = "Invalid destination";
                    }
                } else {
                    // Handle missing destination
                    $errorMessage = "Destination not specified";
                }
            } else {
                $errorMessage = "Wrong username or password";
            }
        } else {
            // Username doesn't exist
            $errorMessage = "You don't have an account";
        }
    } else {
        $errorMessage = "Wrong username or password";
    }
}

if (isset($_GET['destination'])) {
    $_SESSION['redirect'] = $_GET['destination'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spm-tours</title>
    <link type="text/css" rel="stylesheet" href="login.css">
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
            <p><?php echo $errorMessage; ?></p>
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>



