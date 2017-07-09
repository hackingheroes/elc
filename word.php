<?php
include "head.php";
include "db_connect.php";

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){

$word_id = $_GET['id'];

$sql = "SELECT word,wdesc FROM words WHERE id = $word_id";

$result = $conn->query($sql);
$words_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
$wrd = $words_data[0];

?>

<p class="information" ><?=$wrd['word']?> - <?=$wrd['wdesc']?></p>

<?php
    echo('<br>');
    echo('<nav>');
?>

    <a class="btn-primary" href="word_desc_display.php?id=<?=$word_id?>">Display Information</a>

<?php echo(' '); ?>

    <a class="btn-primary" href="word_desc_edit.php?id=<?=$word_id?>">Add Information</a>

    <a class="btn-primary" href="clist.php">Return back</a>
<?php
    echo('</nav>');
    echo("<br><br><br><br>");
?>
<?php
}else{
    echo("You're not allowed to be here if you're not logged.");
}
?>
<?php
include "foot.php";
 ?>
