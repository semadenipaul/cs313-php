<?php
require("dbConnect.php");
$db = get_db();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    echo "$username<br/>";
    $password = htmlspecialchars($_POST['password']);
    echo "$password<br/>";
} else {
  header('Location: signIn.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Welcome</title>
</head>
<body>
    <?php
    
    $statement = $db->prepare("SELECT * FROM w7_usr WHERE username = $username");
    $statement->execute();
    echo "You were before the while loop";
    // Go through each result
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

        $hash_password = $row['hashPass'];
        echo "$hash_password";
    }
    if (isset($hash_password)) {
        if (password_verify($password, $hash_password)) {
            echo "<h1>WELCOME $username!!!!!! fool. You killing me SMALLS!!</h1>";
        } else {
            header('Location: signIn.php');
            die();
        }
    }

    ?>
</body>

</html>