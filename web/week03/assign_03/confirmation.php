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
            <?php
            $address = sanitize_input('address');
            $city = sanitize_input('city');
            $state = sanitize_input('state');
            $zip = sanitize_input('zip');

            function sanitize_input($input)
            {
                if (isset($_GET[$input])) {
                    $input = $_GET[$input];
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);
                    return $input;
                }
                return '';
            }
            ?>
        </div>

        <div class="item2">
            <?php
            $value = $_GET["validate"];
            $value2 = $_GET["reset"];
            if ($value == 1) {
                echo "Your order has been CONFIRMED! <br>";
                echo $_SESSION["item"] . "</b>";
                echo "<b>Your total is: " . $_SESSION["total"] . "</b>";
                echo "<br>" . "Your order will be shipped to this address:" . "<br>";
                echo $address . "<br>" . $city . ", " . $state . " " . $zip;
            }
            else if ($value2 == 0) {
                header("https://thawing-woodland-23025.herokuapp.com/week03/assign_03/assign_03.html");
            }
            else {
                echo "<h3>Your order has been cancelled.</h3>";
            }

            ?>
        </div>
        <div class="item3">
            <p>| Browse Items | Shopping Cart | Checkout | Confirmation<br> <br>Created at Brigham Young University Idaho <br> January 23, 2020 &#169;</p>
        </div>
    </form>

</body>

</html>