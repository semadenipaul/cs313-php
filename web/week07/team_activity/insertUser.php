<?php
require 'dbConnect.php';
$db = get_db();

$username = $_POST["username"];
$pw = $_POST["password"];


$insert = $db->prepare('INSERT into w7_usr VALUES :username, :pw;');
$insert->bindValue(':username', $username);
$insert->bindValue(':pw', $pw);
$insert->execute();

header('Location: signIn.php');
die();


?>