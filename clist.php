<?php
include 'head.php';
include 'db_connect.php';

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){

$sql = "SELECT id,word,wdesc FROM words";
$result = $conn->query($sql);
$words_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<?php
echo("Hello!");

echo('<br><br>');
echo('<nav>');
echo('<a class="btn-primary" href="clist.php">Show List</a>');
echo(' ');
echo('<a class="btn-primary" href="cadd.php">Add Words</a>');
echo('</nav>');
echo('<br>')
?>

<?php foreach($words_data as $word) : ?>

<?php
        echo '<div class="list">';
        $clog = $word['word'];
        $cpass = $word['wdesc'];
        $cid = $word['id'];
?>
        <a href="word.php?id=<?=$word['id']?>">

<?php
        echo("<span class=\"bold-text\">".$clog. "</span>" . " - " . $cpass);
        echo("</a>");
        echo "</div>";
        echo("<br>");
?>

 <?php endforeach; ?>

 <?php
 }else{
     echo("You're not allowed to be here if you're not logged.");
 }
 ?>

<?php include 'foot.php'; ?>
