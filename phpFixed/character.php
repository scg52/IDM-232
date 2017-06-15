<?php require_once 'config.php';
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
    <div class="content-grid vollkorn">                                                    <!-- body-->
      
      <div class="title">
        <h1>Character Overview</h1>
      </div>

      <div class="basics">
        <div class="name char-item">
          <p><?php echo $name; ?></p>
        </div>

        <div class="player char-item">
          <p><?php echo $player; ?></p>
        </div>

        <div class="level char-item">
          <p><?php echo $level; ?></p>
        </div>

        <div class="race char-item">
          <p><?php echo $race; ?></p>
        </div>
      </div><!--basics-->
        
        <div class="charPic char-item">
          <img src="<?php echo $pic; ?>" alt="<?php echo $name; ?>">
        </div>

      <div class="statin">
        <div class="stats char-item">
          <h3>Stats</h3>
          <p><?php echo $stats; ?></p>
        </div>

        <div class="inventory char-item">
          <h3>Inventory</h3>
          <p><?php echo $inventory; ?></p>
        </div>
      </div><!--statin-->
        

        <div class="story char-item">
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
    </div>