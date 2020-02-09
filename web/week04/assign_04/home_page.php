<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="home_page.css">
    <title>National Parks</title>
</head>

<body>
    <form action="" method="POST" class="grid-container">
        <div class="item1">
            <h1>Explore U.S. National Parks</h1>
        </div>
        <div class="item2">
            <ul>
                <li><a href="">Home Page</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="">Sign Up</a></li>
                <li><a href="">About Us</a></li>
            </ul>
        </div>
        <div class="item3">
            <img id="image1" src="alaska.jpg" />
            <img id="image2" src="yosemite.jpg" />
            <img id="image3" src="arcadia.jpg" />
            <img id="image4" src="yellowstone.gif" />
            <img id="image5" src="arches.jpg" />
            <img id="image6" src="teton.jpg" />
            <img id="image7" src="canyonlands.jpg" />
            <img id="image8" src="smokymtn.jpg" />
            <img id="image9" src="everglades.jpg" />
            <img id="image10" src="hawaii.jpg" />
            <img id="image11" src="glacier.jpg" />
        </div>
        <div class="item4"></div>
        <div class="item5"></div>
    </form>
    <script src="home_page.js"></script>
</body>

</html>