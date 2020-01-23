<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>
   <?php
   // remove previous session variable

   // Set session variables
   $_SESSION["favcolor"] = "green";
   $_SESSION["favanimal"] = "dolphin";
   // echo that variables have been set
   echo "Session variables have been set.";
   ?>
   <a href="thursdaySession2.php">Check the variables on another page</a>

   <?php // set session variables using a form 
   ?>
</body>

</html>