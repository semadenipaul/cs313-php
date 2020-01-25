<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="checkout.css">
    <title>| Checkout</title>
</head>

<body>
    <form class="grid-container" action="checkout.php" method="GET">
        <div class="item1">
            <h1>Checkout</h1>
            <?php
            $total = sanitize_input($_SESSION["total"]);

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
            <?php echo "Please enter your shipping address: <br>"?>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
                <div class="col-50">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" placeholder="NY">
                </div>
                <div class="col-50">
                    <label for="zip">Zip</label>
                    <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
                <?php
                echo "<br>" . "<b>Your total is: " . $total . "</b>";
                ?>
            </div>
        </div>
        <div class="item3">
            <button class="button" name="validate" type="submit" value="1"><span>Complete Purchase</span></button>
            <button class="button2" name="reset" type="submit"><span>Return to Cart</span></button>
        </div>
        <div class="item4">
            <p><a href="assign_03.html">| Browse Items</a> <a href="view_cart.php">| Shopping Cart</a> | Checkout<br> <br>Created at Brigham Young University Idaho <br> January 23, 2020 &#169;</p>
        </div>
    </form>

</body>

</html>