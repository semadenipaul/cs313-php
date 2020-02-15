<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index_style_sheets.css">
    <title>| Welcome</title>
</head>

<body>
    <form action="login_insert.php" method="GET" class="grid-container">
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
            <input type="text" class="keywords" placeholder="Keywords" name="keywords"><br>
            <button class="submit_button" type="submit">Show Me My Vacation Destination!</button>
        </div>
        <div class="item4"></div>
    </form>
    <?php
    if (isset($_SESSION["person"])) {
        $_SESSION["person"] = $person;
        $_SESSION["person_password"] = $password;

        echo "<div style=\"color: white;\">Session variables are " . $person . " and " . $password . "</div>";
    } 
    else {
        echo "<div style=\"color: white;\">Sessionn variables are not set!!!!</div>";
    }

    ?>
</body>

</html>

<?php
require "db_connect.php";
$db = get_db();

$person = $db->prepare("SELECT * FROM person");
$person->execute();

while ($row = $person->fetch(PDO::FETCH_ASSOC)) {
    $user_name = $row['USER_NAME'];
    $password = $row['password'];
    $email = $row['person_email'];
    $new_person = $row['new_person'];
    $location = $row['person_location'];

    echo "<div style=\"color: white;\" class=\"item4\"><p>Username: $user_name<br>Password: $password<br>Email: $email<br>New Person? $new_person<br>Location: $location<br></p></div>";
}
?>