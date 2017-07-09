<?php
include "head.php";
include "db_connect.php";

$ide = mysqli_real_escape_string($conn,$_POST['id']);
$save1 = mysqli_real_escape_string($conn,$_POST['phonetic']);
$save2 = mysqli_real_escape_string($conn,$_POST['example1']);
$save3 = mysqli_real_escape_string($conn,$_POST['example2']);
$save4 = mysqli_real_escape_string($conn,$_POST['example3']);
$save5 = mysqli_real_escape_string($conn,$_POST['synonyms']);
$save6 = mysqli_real_escape_string($conn,$_POST['style']);


$sql = "UPDATE words
SET phonetic = '$save1', example1 = '$save2', example2 = '$save3', example3 = '$save4', synonym = '$save5', style = '$save6'
WHERE id = $ide";

$result = $conn->query($sql);

?>

<h1>You've succesfully updated the word, thanks for supporting the site!</h1>
<a href="clist.php"><p>Press me to return.</p></a>

<?php
include "foot.php";
 ?>
