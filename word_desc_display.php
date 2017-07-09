<?php
include "head.php";
include "db_connect.php";

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){

$word_id = $_GET['id'];

$sql = "SELECT word,wdesc,phonetic,example1,example2,example3,synonym,style FROM words WHERE id = $word_id";

$result = $conn->query($sql);
$words_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
$wrd = $words_data['0'];

    echo('<br>');
    echo('<nav>');
?>

    <a class="btn-primary" href="word_desc_display.php?id=<?=$word_id?>">Display Information</a>

<?php echo(' '); ?>

    <a class="btn-primary" href="word_desc_edit.php?id=<?=$word_id?>">Add Information</a>

    <a class="btn-primary" href="word.php?id=<?=$word_id?>">Return back</a>

<?php
    echo('</nav>');
    echo("<br><br>");
?>

<h3><?=$wrd['word']?> - <?=$wrd['wdesc']?></h3>


<?php
$locator = 0;

    if(strlen($wrd['phonetic'])>0) {
        $locator = 1;
        echo("/$wrd[phonetic]/");
} ?>


<?php
$cdisplay = 1;
if(strlen($wrd['example1'])>0)
{
    echo("<p class='use'>Examples of use:</p>");
    $locator = 1;
    $cdisplay = 0;
    echo("$wrd[example1]");
    echo("<br>");
}
if(strlen($wrd['example2'])>0)
{
    if($cdisplay==1) {echo("<p class='use'>Examples of use:</p>");}
    $locator = 1;
    echo("$wrd[example2]");
    echo("<br>");
}
if(strlen($wrd['example3'])>0)
 {
    if($cdisplay==1) {echo("<p class='use'>Examples of use:</p>");}
    $locator = 1;
    echo("$wrd[example3]");
    echo("<br>");
 }
 ?>

<?php
if(strlen($wrd['synonym'])>0)
 {
    echo "<p class='use'>Synonyms: </p>";
    echo("$wrd[synonym]");
    $locator = 1;
}
    ?>
<br><br>
<?php
if(strlen($wrd['style'])>0)
 {
     $locator = 1;
    echo "<p class='use'>Style: </p>";
    echo("$wrd[style]");
 }
    ?>

<?php

if($locator == 0)
{
    echo("Sorry, there are no more information that can be displayed about this word! Go and add some if you wish!");
    echo("<br><br>");
}

 ?>
 <?php
 }else{
     echo("You're not allowed to be here if you're not logged.");
 }
 ?>
<?php
include "foot.php";
 ?>
