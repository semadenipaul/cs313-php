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
    <title>Login</title>
</head>
<body>
<form action="" method="POST" class="grid-container">
        <div class="item1">
            <h1>Explore U.S. National Parks</h1>
        </div>
        <div class="item2">
            <ul>
                <li><a href="home_page.php">Home Page</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="">Sign Up</a></li>
                <li><a href="">About Us</a></li>
            </ul>
        </div>
        <div class="item3">
            <p>Email: <input type="text" name="email"></p>
            <p>City: <input type="text" name="city"></p>
            <p>State: <input type="text" name="state"></p>
            <button type="submit" value="submit">Submit</button>
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