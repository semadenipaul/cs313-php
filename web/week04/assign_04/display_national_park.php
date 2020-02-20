<?php
session_start();

if (isset($_GET['Submit'])) {
    $_SESSION['username'] = $_GET['username'];
    $_SESSION['password'] = $_GET['password'];
}

require("db_connect.php");
$db = get_db();

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$state_id = $_GET['national_parks_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index_style_sheets.css">
    <title>| Explore U.S. National Parks</title>
</head>

<body>
    <form action="" method="GET" class="grid-container">
        <div class="item1">
            <h1>Explore U.S. National Parks</h1>
        </div>
        <div class="item2">
            <ul>
                <li><a href="home_page.php">Home Page</a></li>
                <li><a href="">Previous Trips</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Logout</a></li>
            </ul>
        </div>
        <div class="item3">
			<?php 
			$statement = $db->prepare("SELECT * FROM national_parks WHERE id = $state_id");
            $statement->execute();
      
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
               $id = $row['id'];
               $national_park = $row['national_park'];
               $image = $row['image'];
      
               echo "<h1>$national_park</h1><p><img src=\"$image\" alt=\"Image of $image\"></p>";
            }
			?>
		</div>
        <div class="item4"></div>
    </form>
</body>

</html>
