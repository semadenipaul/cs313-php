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
    <form class="grid-container">
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
                echo $item . "<br>";
            }
            ?>
        </div>
        <div class="item3">
            <button class="button" name="validate" type="submit" value="1"><span>Proceed to Check Out</span></button>
            <button class="button2" name="reset" type="submit"><span>Cancel Order</span></button>
        </div>
        <div class="item4">
            <p>| Browse Items | Shopping Cart <br> <br>Created at Brigham Young University Idaho <br> January 23, 2020 &#169;</p>
        </div>
    </form>

</body>

</html>