<?php
session_start();

if (isset($_GET['Submit'])) {
    $_SESSION['username'] = $_GET['username'];
    $_SESSION['password'] = $_GET['password'];
}

require("db_connect.php");
$db = get_db();

$username = $_GET['username'];
$password = $_GET['passwprd'];
$state = $_GET['state'];
$nature1 = $_GET['nature1'];
$nature2 = $_GET['nature2'];
$nature3 = $_GET['nature3'];
$activities1 = $_GET['activities1'];
$activities2 = $_GET['activities2'];
$activities3 = $_GET['activities3'];
$vacation_time = $_GET['vacation_time'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index_style_sheets.css">
    <title>| Explore U.S. National Parks</title>
</head>

<body>
    <form action="" method="GET" class="grid-container">
        <div class="item1">
            <h1>Explore U.S. National Parks</h1>
        </div>
        <div class="item2">
            <ul>
                <li><a href="home_page.php">Home Page</a></li>
                <li><a href="">Previous Trips</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Logout</a></li>
            </ul>
        </div>
        <div class="item3">
			<?php 
			echo "<p>Username: " . $username . " Password: " . $password . "</p>";
			echo "<p>State: " . $state . "</p>";
			echo "<p>#1 Nature option: " . $nature1 . "</p>";
			echo "<p>#2 Nature option: " . $nature2 . "</p>";
			echo "<p>#3 Nature option: " . $nature3 . "</p>";
			echo "<p>#1 Activities option: " . $activities1 . "</p>";
			echo "<p>#2 Activities option: " . $activities2 . "</p>";
			echo "<p>#3 Activities option: " . $activities3 . "</p>";
			echo "<p>Length of Vacation: " . $vacation_time . "</p>";
			?>
		</div>
        <div class="item4"></div>
    </form>
</body>

</html>
