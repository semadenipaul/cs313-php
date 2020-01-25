<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view_cart.css">
    <title>| View Shopping Cart</title>
</head>

<body>
    <form class="grid-container" action="checkout.php" method="GET">
        <div class="item1">
            <h1>Items in Your Shopping Cart</h1>
            <?php
            $total = sanitize_input('total_amount');

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
            $choice = $_GET['choice'];
            foreach ($choice as $item) {
                echo "$" . $item . "<br>";
            }
            $_SESSION["items"] = $item;
            echo "<br>" . "<b>Your total is: " . $total . "</b>";
            $_SESSION["total"] = $total;
            ?>
        </div>
        <div class="item3">
            <button class="button" name="validate" type="submit" value="1"><span>Proceed to Checkout</span></button>
            <button class="button2" name="reset" type="submit"><span>Cancel Order</span></button>
        </div>
        <div class="item4">
            <p><a href="assign_03.html">| Browse Items</a> | Shopping Cart <br> <br>Created at Brigham Young University Idaho <br> January 23, 2020 &#169;</p>
        </div>
    </form>

</body>

</html>