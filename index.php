<?php include "head.php"; ?>
<div class="container">


<?php if(isset($_SESSION['username']) && $_SESSION['username'] != ""){ ?>

<a href="clist.php">
<?php echo("Hi! You shouldn't be there! Press me to go to the panel!"); ?>
</a>

<?php }else{?>
    <form class="" action="login.php" method="post">


            <label for="">Login</label>
            <input type="text" name="username" value="" required>

            <label for="">Password</label>
            <input type="password" name="password" value="" required>
            <input class="btn" type="submit" name="" value="Sign in">
        <p>or</p>

        <div class="register3">

        <a href="create_user.php">Register</a>
       </div>
    </form>
<?php } ?>




</div>
<?php include "foot.php"; ?>
