<?php
include "head.php";
include "db_connect.php";

if(isset($_SESSION['username']) && $_SESSION['username'] != ""){

$word_id = $_GET['id'];

$sql = "SELECT word,wdesc,phonetic,example1,example2,example3,synonym,style FROM words WHERE id = $word_id";

$result = $conn->query($sql);
$words_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
$wrd = $words_data['0'];
$confirmstring="";

$b1 = 1;
$b2 = 1;
$b3 = 1;
$b4 = 1;
$b5 = 1;
$b6 = 1;

$ephonetic = $wrd['phonetic'];
$eexample1 = $wrd['example1'];
$eexample2 = $wrd['example2'];
$eexample3 = $wrd['example3'];
$esynonym = $wrd['synonym'];
$estyle = $wrd['style'];

if(strlen($ephonetic)>0) {$b1 = 0;}
if(strlen($eexample1)>0) {$b2 = 0;}
if(strlen($eexample2)>0) {$b3 = 0;}
if(strlen($eexample3)>0) {$b4 = 0;}
if(strlen($esynonym)>0) {$b5 = 0;}
if(strlen($estyle)>0) {$b6 = 0;}

?>

<?php
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
<form class="" action="desc_submit.php" method="post">
    <h3><?=$wrd['word']?> - <?=$wrd['wdesc']?></h3>
<?php

if($b1==1){
    echo "<label class='sentence'>Phonetic Spelling</label>";
    echo "<input class='joke' type='text' name='phonetic' value=''>";
    echo "<br><br>";
} else {
    echo("<input type='hidden' name='phonetic' value='$wrd[phonetic]'>");
}

if($b2==1){
    echo " <label class='sentence'> Example of use in sentence</label>";
    echo "<input class='joke'  type='text' name='example1' value=''>";
    echo "<br><br>";
}else{
    echo("<input type='hidden' name='example1' value='$wrd[example1]'>");
}
if($b3==1){
echo "<label class='sentence'>Example of use in sentence</label>";
    echo "<input class='joke' type='text' name='example2' value=''>";
    echo "<br><br>";
}else{
    echo("<input type='hidden' name='example2' value='$wrd[example2]'>");
}

if($b4==1){
    echo "<label class='sentence'>Example of use in sentence</label>";
    echo "<input class='joke' type='text' name='example3' value=''>";
    echo "<br><br>";
}else{
    echo("<input type='hidden' name='example3' value='$wrd[example3]'>");
}

if($b5==1){
    echo "<label class='sentence'>Synonyms to the word</label>";
    echo "<input class='joke' type='text' name='synonyms' value=''>";
    echo "<br><br>";
}else{
    echo("<input type='hidden' name='synonyms' value='$wrd[synonym]'>");
}

if($b6==1){
    echo "<label class='sentence'>Style</label>";
    echo "<br><br>";
    echo "<input class='radio' type='radio' name='style' value='formal'>Formal";
    echo "<br><br>";
    echo "<input class='radio' type='radio' name='style' value='informal'>Informal";
    echo "<br><br>";
}else{
    echo("<input type='hidden' name='style' value='$wrd[style]'>");
}

echo("<input type='hidden' name='id' value='$word_id'>");

?>

<?php
$lock = 0;
if($b1 == 0 && $b2 == 0 && $b3 == 0 && $b4 == 0 && $b5 == 0 && $b6 == 0) { $lock=1; }
?>

<?php
if($lock)
{
    echo("This word is already completed, you can try another one if you want!");
}else{
    echo "<input class='signin' type='submit' value='Contribute'>";
}
?>
</form>
<?php
}else{
    echo("You're not allowed to be here if you're not logged.");
}
?>
<?php
include "foot.php";
 ?>
