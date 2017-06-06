<?php require_once 'config.php'; ?>
<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    $id = 1;
  }

  $query = "SELECT * FROM characters WHERE id = {$id} LIMIT 1";
  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $player = $row['player'];
    $level = $row['level'];
    $race = $row['race'];
    $inventory = $row['inventory'];
    $stats = $row['stats'];
    $backstory = $row['backstory'];
    $pic = $row['pic'];
  }
?>
<head>
  <title><?php echo $name; ?></title>
  <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Vollkorn" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="playerinfocss.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
 <div class="everything">
 <header>                          
      <nav class="nav cinzel">
      <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
      <input type="checkbox" name="burger" id="burger" class="burger">
      <label for="burger" class="burger-toggle"><span>Menu</span>&#9776;</label>
      <ul class="main-menu">
        <li class="menu-item right"><a href="worlds/index.html">Worlds</a>
            <ul class="sub-menu">
            <li class="menu-item world"><a href="worlds/coriath.html">Coriath</a></li>
            <li class="menu-item world"><a href="worlds/grimoire.html">Grimoire</a></li>
            <li class="menu-item world"><a href="worlds/commodore.html">Commodore</a></li>
            <li class="menu-item world"><a href="worlds/cutlass.html">Cutlass</a></li>
            <li class="menu-item world"><a href="worlds/ragnarok.html">Ragnarok</a></li>
            <!--<li><a href="worlds/feia.html">Feia</a></li>
            <li><a href="worlds/kiina.html">Ki'ina</a></li> -->
          </ul>
        </li>
        <li class="menu-item right"><a href="howtoplay.html">Gameplay</a></li>
        <li class="menu-item right"><a href="charlist.php">Characters</a></li>
      </ul>
      </nav>
  </header>
  
   <main>
    <div class="content-grid vollkorn">                                                    <!-- body-->
      
      <div class="title">
        <h1>Character Overview</h1>
      </div>

      <div class="basics">
        <div class="name">
          <p><?php echo $name; ?></p>
        </div>

        <div class="player">
          <p><?php echo $player; ?></p>
        </div>

        <div class="level">
          <p><?php echo $level; ?></p>
        </div>

        <div class="race">
          <p><?php echo $race; ?></p>
        </div>
      </div><!--basics-->
        
        <div class="charPic">
          <img src="<?php echo $pic; ?>" alt="<?php echo $name; ?>">
        </div>

      <div class="statin">
        <div class="stats">
          <h3>Stats</h3>
          <p><?php echo $stats; ?></p>
        </div>

        <div class="inventory">
          <h3>Inventory</h3>
          <p><?php echo $inventory; ?></p>
        </div>
      </div><!--statin-->
        

        <div class="story">
          <h3>Backstory</h3>
          <p><?php echo $backstory; ?></p>
          <br>
          <div class="adventures">
          <h3>Adventures</h3>
          <?php
            $query2 = "SELECT * FROM adventures WHERE name = $name";
            $result2 = mysqli_query($connection, $query2);

            while ($row = mysqli_fetch_assoc($result2)) { 
              $story = $row['story'];
              echo "<p>" . $story . "</p>";
            }?>
          </div>
        </div>

    </div> <!--content-->
    <div class="footer">
      <p>Stephen Gross</p>
      <a href="images.html">Image use</a>
    </div><!--footer-->
   </main>
  </div>       <!-- close div everything-->
</body>
</html>