<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
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
        <div class="item3" id="stage">
            <a href="alaska.jpg"><img id="image1" src="alaska.jpg" /></a>
            <a href="yosemite.jpg"><img id="image2" src="yosemite.jpg" /></a>
            <a href="arcadia.jpg"><img id="image3" src="arcadia.jpg" /></a>
            <a href="yellowstone.jpg"><img id="image4" src="yellowstone.jpg" /></a>
            <a href="arches.jpg"><img id="image5" src="arches.jpg" /></a>
            <a href="teton.gif"><img id="image6" src="teton.gif" /></a>
            <a href="canyonlands.jpg"><img id="image7" src="canyonlands.jpg" /></a>
            <a href="smokymtn.jpg"><img id="image8" src="smokymtn.jpg" /></a>
            <a href="everglades.jpg"><img id="image9" src="everglades.jpg" /></a>
            <a href="hawaii.jpg"><img id="image10" src="hawaii.jpg" /></a>
            <a href="glacier.jpg"><img id="image11" src="glacier.jpg" /></a>
        </div>
        <div class="item4"></div>
        <div class="item5">
            <p>| HomePage <br> <br>Created at Brigham Young University Idaho <br> February 11, 2020 &#169;</p>
        </div>
    </form>
    <script src="home_page.js"></script>
</body>

</html>