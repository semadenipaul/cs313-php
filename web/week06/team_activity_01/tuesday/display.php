<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            // retrieve url parameter
            $personId = $_GET['personId'];

            // execute query to pull up data from that id
            $statement = $db->prepare('SELECT * FROM w6_user WHERE Id = :personId');
            $statement->bindValue(':personId', $personId);
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
               $id = $row['id'];
               $first = $row['first'];
               $last = $row['last'];
               $food_id = $row['food_id'];

               /*$foods = $db->prepare("SELECT * FROM w6_food WHERE Id = $food_id");
               $foods->execute();
               while ($frow = $foods->fetch(PDO::FETCH_ASSOC)){
                  $food = $frow['food'];
               }*/
               echo "<h1>$first $last's favorite food is $food_id</h1>";
            }
            // execute another query to get food data
            // display name and favorite food
         ?>

		</div>
	</body>
</html>