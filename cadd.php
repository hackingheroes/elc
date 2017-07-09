<?php
include 'head.php';
include 'db_connect.php';

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){

$sql = "SELECT word,wdesc FROM words";
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
echo('<br><br>');
echo('</nav>');
?>

<div class="container2">
    <form action="adding.php" method="post">
      <div class="word">
        <label for="">Word</label>
        <input type="text" name="word" value="" required>
</div>
      <div class="nothing">
</div>
<br>
     <div class="desc">
        <input type="text" name="description" value="" required>
      <div class="worddesc">
        <label for="">Description</label>
        </div>
</div>
        <br>
            <div class="btn">
                <input type="submit" name="" value="Add words!">
            </div>
    </form>
</div>

<?php
}else{
    echo("You're not allowed to be here if you're not logged.");
}
?>

<?php include 'foot.php'; ?>
