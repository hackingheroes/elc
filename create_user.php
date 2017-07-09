<?php include "head.php"; ?>

<h1>Register</h1>
<h3>The text limit for both login and the password is 20 characters.</h3>
<div class="container">
<form class="" action="create_user_submit.php" method="post">

        <label for="">Login</label>
        <input type="text" name="username" value="" required>

        <label for="">Password</label>
        <input type="password" name="password" value="" required>

   <div class="btn">

   <input type="submit" name="" value="Submit">
   </div>
</form>
</div>
<?php include "foot.php"; ?>
