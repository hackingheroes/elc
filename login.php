<?php
include 'head.php';
include 'db_connect.php';

if(!(isset($_SESSION['username']) && $_SESSION['username'] != "")){

$sql = "SELECT username,password FROM users";
$result = $conn->query($sql);
$users_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

$glogin = $_POST['username'];
$gpassword = $_POST['password'];
$tester = 0;
?>

<?php foreach($users_data as $user) : ?>

<?php
        $clog = $user['username'];
        if($glogin == $clog)
        {
            $cpass = $user['password'];
            if($cpass == $gpassword)
            {
                $tester = 1;
                $_SESSION['username'] = $glogin;
            }
            else $tester = 2;
        }
 ?>

 <?php endforeach; ?>

 <?php
 if($tester==0){
echo("Sorry, you're not registered.");
echo("<br><br>");
echo("Press <a href='create_user.php'>HERE</a> to register.");
  }
else if($tester==1)
{

echo("Hello, $glogin !");
echo('<br><br>');
echo('<nav>');
echo('<a class="btn-primary" href="clist.php">Show List</a>');
echo(' ');
echo('<a class="btn-primary" href="cadd.php">Add Words</a>');
echo('</nav>');
echo("<br>");
}
else
{
    echo("Sorry, the given password is wrong");
    echo("<br><br>");
    echo("Press <a href='index.php'>HERE</a> to try again.");
}

}else{
    echo("You're not allowed to be here if you're not logged.");
}
 ?>

<?php include 'foot.php'; ?>
