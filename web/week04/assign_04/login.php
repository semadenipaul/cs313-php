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
<form action="" method="POST" class="grid-container">
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
            <p>Username: <input type="text" name="username"/></p>
            <p>Password: <input type="text" name="password"/></p>
            <button type="submit" value="submit">Sign In</button><br>
            <a href="">Forgot Password</a>
            <a href="">Forgot Username</a>
        </div>
        <div class="item4"></div>
        <div class="item5"></div>
    </form>

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

        echo "<div class=\"item4\"><p>Username: $user_name<br>Password: $password<br>Email: $email<br>New Person? $new_person<br>Location: $location<br></p></div>";
    }
    ?>
</body>
</html>