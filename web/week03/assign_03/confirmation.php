<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="confirmation.css">
    <title>| Confirmation</title>
</head>

<body>
    <form class="grid-container" action="" method="GET">
        <div class="item1">
            <h1>Confirmation</h1>
        </div>

        <div class="item2">
            <?php 
            echo "Your order has been CONFIRMED! <br>"; 

            echo "<b>Your total is: " . $_SESSION["total"] . "</b>";
            echo "<br>" . "Your order will be shipped to this address:" . "<br>";
            echo $_GET["address"] . "<br>" . $_GET["city"] . ", " . $_Get["state"] . " " . $_GET["zip"];
            ?>
        </div>
        <div class="item3">
            <p>| Browse Items | Shopping Cart | Checkout | Confirmation<br> <br>Created at Brigham Young University Idaho <br> January 23, 2020 &#169;</p>
        </div>
    </form>

</body>

</html>