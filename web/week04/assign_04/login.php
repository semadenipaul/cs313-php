<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login_style_sheet.css">
    <title>| Login</title>
</head>

<body>
    <form action="login_index.php" method="POST" class="grid-container">
        <div class="item1">
            <p style="text-align: left; font-size: 20px;">Explore U.S. National Parks</p>
            <h1>Login</h1>
        </div>
        <div class="item2">
            <ul>
                <li><a href="home_page.php">Home Page</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="sign_up.php">Sign Up</a></li>
                <li><a href="">About Us</a></li>
            </ul>
        </div>
        <div class="item3">
            <p>Username: <input type="text" name="username" /></p>
            <p>Password: <input type="text" name="password" /></p>
            <button type="submit" value="submit">Sign In</button><br>
            <a href="">Forgot Password</a>
            <a href="">Forgot Username</a>
        </div>
        <div class="item4"></div>
        <div class="item5"></div>
    </form>
    <?php
    if(isset($_POST["submit"])) {
        $_SESSION['person'] = $_POST["username"];
        $_SESSION['person_password'] = $_POST["password"];
    }
    
    ?>
</body>

</html>