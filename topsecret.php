<?php  include 'head.php'; ?>

<?php if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
    echo("hi");
}else{
    echo("NOOOOOOOOOOOOOO");
}
     ?>

     <?php  include 'foot.php'; ?>
