<?php
require("dbConnect.php");
$db = get_db();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
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
    // Go through each result
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $username = $row['username'];
        $hash_password = $row['hashPass'];
    }
     if (password_verify($password, $hash_password)) {
        echo "WELCOME $username!!!!!! fool. You killing me SMALLS!!";
     } else {
       header('Location: signIn.php');
       die();
     }

    ?>
</body>

</html>