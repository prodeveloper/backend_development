<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "test_app_user";
  $dbpass = "test_app_secret";
  $dbname = "test_app";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }

  // 5. Close database connection
  mysqli_close($connection);
?>
