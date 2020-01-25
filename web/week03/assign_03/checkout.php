<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="checkout.css">
    <title>| Checkout</title>
</head>

<body>
    <form class="grid-container" action="checkout.php" method="GET">
        <div class="item1">
            <h1>Checkout</h1>
        </div>

        <div class="item2">
            <?php echo "Please enter your shipping address: <br>" ?>
            <br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street"><br>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York"><br>
            <label for="state">State</label>
            <input type="text" id="state" name="state" placeholder="NY"><br>
            <label for="zip">Zip</label>
            <input type="text" id="zip" name="zip" placeholder="10001"><br>

            <?php
            echo "<br>" . "<b>Your total is: " . $_SESSION["total"] . "</b>";
            ?>
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