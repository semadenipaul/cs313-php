<?php
session_start();

if (isset($_POST['Submit'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}

require("db_connect.php");
$db = get_db();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index_style_sheets.css">
    <title>| Welcome</title>
</head>

<body>
    <form action="login_insert.php" method="GET" class="grid-container">
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
            <p>What words describe the outdoor vacation you seek?</p>
            <p>Which state would you like to visit?
                <select id="states" name="state">
                    <?php
                    $statement = $db->prepare("SELECT * FROM national_parks");
                    $statement->execute();

                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                        $id = $row['national_parks_id'];
                        $state = $row['US_state'];
                        echo "Id: " . $id;
                        echo "State: " . $state;
                        echo "<option value='$id'>$state</option>";
                    }
                    ?>
                </select>
            </p>
            <p>What weather conditions do you prefer?
                <input type="radio" id="sunny" name="weatherConditions" value="sunny" /><label for="sunny">Sunny</label>
                <input type="radio" id="snowy" name="weatherConditions" value="snowy" /><label for="snowy">Snowy</label>
            </p>
            <p>Where do you want to spend most of your time?
                <input type="checkbox" id="sunny" name="nature[]" value="sunny" /><label for="sunny">Forest</label>
                <input type="checkbox" id="snowy" name="nature[]" value="snowy" /><label for="snowy">Beach</label>
                <input type="checkbox" id="snowy" name="nature[]" value="snowy" /><label for="snowy">Mountains</label>
                <input type="checkbox" id="snowy" name="nature[]" value="snowy" /><label for="snowy">Water</label>
                <input type="checkbox" id="snowy" name="nature[]" value="snowy" /><label for="snowy">Desert</label>
            </p>
            <br><br>
            <button class="submit_button" type="submit">Show Me My Vacation Destination!</button>
        </div>
        <div class="item4"></div>
    </form>
</body>

</html>

<?php
require "db_connect.php";
$db = get_db();

$person = $db->prepare("SELECT * FROM person");
$person->execute();

while ($row = $person->fetch(PDO::FETCH_ASSOC)) {
    $user_name = $row['USER_NAME'];
    $password = $row['password'];
    $email = $row['person_email'];
    $new_person = $row['new_person'];
    $location = $row['person_location'];

    echo "<div style=\"color: white;\" class=\"item4\"><p>Username: $user_name<br>Password: $password<br>Email: $email<br>New Person? $new_person<br>Location: $location<br></p></div>";
}
?>
<?php
/*<select id="states">
                    <option value="Alabama">Alabama</option>
                    <option value="Alaska">Alaska</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Arkansas">Arkansas</option>
                    <option value="California">California</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Connecticut">Connecticut</option>
                    <option value="Delaware">Delaware</option>
                    <option value="Florida">Florida</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Idaho">Idaho</option>
                    <option value="Illinois">Illinois</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Iowa">Iowa</option>
                    <option value="Kansas">Kansas</option>
                    <option value="Kentucky">Kentucky</option>
                    <option value="Louisiana">Louisiana</option>
                    <option value="Maine">Maine</option>
                    <option value="Maryland">Maryland</option>
                    <option value="Massachusetts">Massachusetts</option>
                    <option value="Michigan">Michigan</option>
                    <option value="Minnesota">Minnesota</option>
                    <option value="Mississippi">Mississippi</option>
                    <option value="Missouri">Missouri</option>
                    <option value="Montana">Montana</option>
                    <option value="Nebraska">Nebraska</option>
                    <option value="Nevada">Nevada</option>
                    <option value="New Hampshire">New Hampshire</option>
                    <option value="New Jersey">New Jersey</option>
                    <option value="New Mexico">New Mexico</option>
                    <option value="New York">New York</option>
                    <option value="North Carolina">North Carolina</option>
                    <option value="North Dakota">North Dakota</option>
                    <option value="Ohio">Ohio</option>
                    <option value="Oklahoma">Oklahoma</option>
                    <option value="Oregon">Oregon</option>
                    <option value="Pennsylvania">Pennsylvania</option>
                    <option value="Rhode Island">Rhode Island</option>
                    <option value="South Carolina">South Carolina</option>
                    <option value="South Dakota">South Dakota</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Utah">Utah</option>
                    <option value="Vermont">Vermont</option>
                    <option value="Virginia">Virginia</option>
                    <option value="Washington">Washington</option>
                    <option value="West Virginia">West Virginia</option>
                    <option value="Wisconsin">Wisconsin</option>
                    <option value="Wyoming">Wyoming</option>
                </select>
                ?>/*






