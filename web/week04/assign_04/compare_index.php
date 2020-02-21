<?php
session_start();

if (isset($_POST['Submit'])) {
$username = $_SESSION['username'];
$password = $_SESSION['password'];
}
$state = $_POST['state'];
$nature1 = $_POST['nature1'];
$nature2 = $_POST['nature2'];
$activities1 = $_POST['activities1'];
$activities2 = $_POST['activities2'];
$activities3 = $_POST['activities3'];
$vacation_time = $_POST['vacation_time'];

// retrieve POST data from the other page

require("db_connect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO national_parks_selected (person, us_state, nature1, nature2, activities1, activities2, activities3, vacation_time) VALUES (:username, :state, :nature1, :nature2, :activities1, :activities2, :activities3, :vacation_time)';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':state', $state);
    $statement->bindValue(':nature1', $nature1);
    $statement->bindValue(':nature2', $nature2);
    $statement->bindValue(':activities1', $activities1);
    $statement->bindValue(':activities2', $activities2);
    $statement->bindValue(':activities3', $activities3);
    $statement->bindValue(':vacation_time', $vacation_time);
	$statement->execute();

	$userId = $db->lastInsertId('national_parks_selected_id_seq');
	// insert into database
	
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: login_index.php/?stateParkId=$stateParkId"); //Sends the data to display.php

die(); 
?>