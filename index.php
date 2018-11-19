<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php
      DEFINE("PAGE_TITLE", "Home"); // change "Home" to the title of the page
      // Need to change this to "../partials/head.php" if inside a folder
      require('partials/head.php');
    ?>
    <!-- Any extra stylesheets/css goes here -->
  </head>
  <body>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">Test</h1>
      </div>
    </div>
    <div class="container">
      <!-- Need to change this to "../partials/navbar.php" if inside a folder -->
      <?php include('partials/navbar.php'); ?>
      <!-- This is where the main page content goes -->
    </div>
    <!-- Need to change this to "../partials/footer.php" if inside a folder -->
    <?php include('partials/footer.php'); ?>
    <!-- Any extra javascript goes down here -->
  </body>
</html>