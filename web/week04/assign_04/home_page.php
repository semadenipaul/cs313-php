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
        <div class="item3" id="cf">
            <img class="image1" src="alaska.jpg" />
            <img class="image2" src="yosemite.jpg" />
            <img class="image3" src="arcadia.jpg" />
            <img class="image4" src="yellowstone.gif" />
            <img class="image5" src="arches.jpg" />
            <img class="image6" src="teton.jpg" />
            <img class="image7" src="canyonlands.jpg" />
            <img class="image8" src="smokymtn.jpg" />
            <img class="image9" src="everglades.jpg" />
            <img class="image10" src="hawaii.jpg" />
            <img class="image11" src="glacier.jpg" />
        </div>
        <div class="item4"></div>
        <div class="item5"></div>
    </form>
</body>

</html>