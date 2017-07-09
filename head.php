<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="favicon.ico">
        <title>English Language Corpus</title>
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
    </head>
    <body>
        <a href="index.php"><img src="logo.png" alt="logo"></a>
        <div class="second-title">
          <h1 class="entry-title">English Language Corpus</h1>
          <?php if(isset($_SESSION['username']) && $_SESSION['username'] != ""){ ?>
              <figure>
                  <a href="logout.php"><img src="ok.png" alt="logout"></a>
                  <figcaption>Logout</figcaption>
              </figure>
        <?php }else{} ?>

        </div>
        <hr>
