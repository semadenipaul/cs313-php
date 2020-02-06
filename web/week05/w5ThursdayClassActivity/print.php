<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Names and Images</title>
</head>

<body>
  <?php
  require "dbConnect.php";
  $db = get_db();

  $event = $db->prepare("SELECT * FROM w5_event");
  $event->execute();

  while ($row = $event->fetch(PDO::FETCH_ASSOC)) {
    $images = $row['image'];
    $names = $row['name'];

    echo "$names <br> $images</p>";
  }
  ?>

</body>

</html>