<?php
session_start();

if (isset($_GET['Submit'])) {
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$state = $_GET['state'];
/*$nature1 = $_GET['nature1'];
$nature2 = $_GET['nature2'];
$activities1 = $_GET['activities1'];
$activities2 = $_GET['activities2'];
$activities3 = $_GET['activities3'];
$vacation_time = $_GET['vacation_time'];*/
}
// retrieve POST data from the other page


require("db_connect.php");
$db = get_db();

try
{
	$query = "SELECT id FROM national_parks WHERE us_state = '$state'";
	$statement = $db->prepare($query);
    $statement->execute();
    
    /*$query_2 = "SELECT id FROM national_parks WHERE us_state = '$state'";
    $statement = $db->prepare($query_2);
    $statement->execute();*/

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $state_id = $row['id'];
    }
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: display_national_park.php/?state_id=$state"); //Sends the data to display.php

die();
