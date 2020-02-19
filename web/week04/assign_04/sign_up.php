<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sign_up_style_sheet.css">
    <title>| Sign Up</title>
</head>

<body>
    <form action="sign_up_insert.php" method="POST" class="grid-container">
        <div class="item1">
            <p style="text-align: left; font-size: 20px;">Explore U.S. National Parks</p>
            <h1>Sign Up</h1>
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
            <p>Re-Enter Username: <input type="text" name="username2" /></p>
            <p>Password: <input type="password" name="password" /></p>
            <p>Re-Enter Password: <input type="password" name="password2" /></p>
            <p>Email: <input type="text" name="email" /></p>
            <p>City: <input type="text" name="city" /></p>
            <p>State: <input type="text" name="state" /></p>
            <button type="submit" value="submit">Create Account</button>
        </div>
        <div class="item4"></div>
        <div class="item5"></div>
    </form>

    <?php
    /*
    require "db_connect.php";
    $db = get_db();

    $previous_parks = $db->prepare("SELECT * FROM previous_parks_visited ppv INNER JOIN person p ON ppv.previous_parks_id = p.id INNER JOIN national_parks np ON ppv.previous_parks_id = np.national_parks_id");
    $previous_parks->execute();

    while ($row = $previous_parks->fetch(PDO::FETCH_ASSOC)) {
        $person = $row['person'];
        $national_parks = $row['national_parks'];

        echo "<div style=\"color: white;\" class=\"item4\"><p>User: $person<br>Previous Parks Visited: $national_parks</p></div>";
    }
    */
    ?>
</body>

</html>