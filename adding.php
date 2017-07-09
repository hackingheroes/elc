<?php

include "head.php";
include "db_connect.php";

$wd = $_POST['word'];
$dwd = $_POST['description'];
$test = 1;


$sec = "SELECT word,wdesc FROM words";
$secres = $conn->query($sec);
$words_data = mysqli_fetch_all($secres, MYSQLI_ASSOC);
?>

<?php foreach($words_data as $word) : ?>
<?php
        $verifyu = $word['word'];
        if($verifyu == $wd) { $test = 0; }
 ?>
 <?php endforeach; ?>

<?php
if($test==1){
$sql = "INSERT INTO words (
    word,
    wdesc) VALUES (
        '$wd',
        '$dwd'
)";

if($conn->query($sql)) {
echo("The word has been succesfully added!");
echo('<br><br>');
echo('<nav>');
echo('<a class="btn-primary" href="clist.php">Show List</a>');
echo(' ');
echo('<a class="btn-primary" href="cadd.php">Add Words</a>');
echo('</nav>');
echo('<br><br><br><br><br><br><br>');
} else {
    echo "Something is wrong. Send the following error message to the administrators: " . $conn->error;
}
}else{
    echo("This word already exists in our database!");
    echo("<br><br>");
    echo("Press <a href='cadd.php'>HERE</a> to return.");
}
?>
<?php include "foot.php"; ?>
