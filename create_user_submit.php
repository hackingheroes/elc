<?php

include "head.php";
include "db_connect.php";

$login = mysqli_real_escape_string($conn,$_POST['username']);
$pass = mysqli_real_escape_string($conn,$_POST['password']);
$test = 1;

$sql = "INSERT INTO users (
    username,
    password) VALUES (
        '$login',
        '$pass'
)";

$sec = "SELECT username FROM users";
$secres = $conn->query($sec);
$users_data = mysqli_fetch_all($secres, MYSQLI_ASSOC);
?>
<?php foreach($users_data as $user) : ?>
<?php
        $verifyu = $user['username'];

        if($verifyu == $login) { $test = 0; }
 ?>
 <?php endforeach; ?>
<?php

if($test == 1)
{
    if($conn->query($sql)){
        echo "You were succesfully registered!";
    }else{
        echo "Something is wrong. Send the following error message to the administrators: " . $conn->error;
    }
} else {
    echo "Sorry, this username is already taken! Try a new one!";
}

echo "<br><br>";

echo "<div class='subbutton'>";
echo "<a class='thebutton' href='index.php'>Return to the login website</a>";
echo "</div>";

 ?>

 <?php include "foot.php" ?>
