<?php require_once 'config.php'; 
if (isset($_GET['title'])) {
    $title = $_GET['title'];
  } else {
    $title = "worlds";
  }?>
<!DOCTYPE html>
<html>
<head>
  <title><?php $title ?></title>
  <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Vollkorn" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="playerinfocss.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
 <div class="everything">
 <?php include 'nav.php'; ?>

 <main>

 <?php
 $page = $title . ".php";
 include $page; 

 include 'footer.php'; ?>
 
 </main>
 </div>  <!-- close everything-->

</body>
</html>