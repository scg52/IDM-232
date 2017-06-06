<?php
  $host = $_SERVER['HTTP_HOST'];

  // Step 1: Setup database connection

  if ($host == 'localhost' || $host == 'localhost:8888') {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "relic";
  } else {
    $dbhost = "localhost";
    $dbuser = "scgfivtw_scg123";
    $dbpass = "gat@k00";
    $dbname = "scgfivtw_relic";
  }

  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if (mysqli_connect_errno()) {
    die("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
?>
