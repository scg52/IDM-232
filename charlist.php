<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Characters</title>
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
    <div class="content-home vollkorn">
      <div class="title center cinzel">
        <br>
        <h1>The Characters of Relic</h1>
      </div> <!--title-->
        <br> 
        <br>


        <div class="characters">
         <?php
          $query = "SELECT id, name, pic FROM characters ORDER BY name DESC";
          $result = mysqli_query($connection, $query);

          if (!$result) {
            die("Database query failed.");
          }

          while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $pic = $row['pic'];

          ?>

        <figure>
          <a href="character.php?id=<?php echo $row['id']; ?>">
            <img src="<?php echo $row['pic'];?>" alt="<?php echo $row['name'];?>">
          </a>
          <figcaption class="display">
          <a href="character.php?id=<?php echo $row['id']; ?>">
            <p><?php echo $row['name'];?></p>
          </a>
          </figcaption>
        </figure>

        <?php } ?>
        </div><!--characters-->

    </div><!--content vollkorn-->
    <div class="footer">
      <p>Stephen Gross</p>
      <a href="../images.html">Image use</a>
    </div>
  </main>
 </div>  <!-- close everything-->

</body>
</html>