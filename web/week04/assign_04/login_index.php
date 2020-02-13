<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index_style_sheet.css">
    <title>| Sign Up</title>
</head>

<?php
require("dbConnect.php");
$db = get_db();
?>

<body>
    <div class="grid-container" style="margin-top:50px;">
        <form action="login_insert.php" method="POST">
            <div class="item1">
                <h1>Explore U.S. National Parks</h1>
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
                <p>What words describe the outdoor vacation you seek?</p>
                <input type="text" class="keywords" placeholder="Keywords" name="first">
                <button class="submit_button" type="submit">Show Me My Vacation Destination!</button>
            </div>
            <div class="item4"></div>
        </form>
    </div>
</body>

</html>