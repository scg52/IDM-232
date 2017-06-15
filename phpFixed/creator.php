<form action="" method="post">
<div class="content-grid vollkorn">                                                    <!-- body-->
      
      <div class="title">
        <h1>Create your Character</h1>
      </div>

      <div class="basics">
        <div class="name char-item">
          <input type="text" name="name" value="Character Name" class="char-form">
        </div>

        <div class="player char-item">
          <input type="text" name="player" value="Player Name" class="char-form">
        </div>

        <div class="level char-item">
          <input type="text" name="level" value="Level" class="char-form">
        </div>

        <div class="race char-item">
          <input type="text" name="race" value="Character Race" class="char-form">
        </div>
      </div><!--basics-->
        
        <div class="charPic char-item">
          <input type="text" name="pic" value="Picture URL" class="char-form">
        </div>

      <div class="statin">
        <div class="stats char-item">
          <h3>Stats</h3>
          <input type="text" name="stats" value="Your Stats" class="char-form">
        </div>

        <div class="inventory char-item">
          <h3>Inventory</h3>
          <input type="text" name="inventory" value="Your Inventory" class="char-form">
        </div>
      </div><!--statin-->
        

        <div class="story char-item">
          <h3>Backstory</h3>
          <input type="text" name="backstory" value="Character Backstory" class="char-form">
          <br>
          <div class="adventures">
          <h3>Adventures</h3>
          <input type="text" name="adventure" value="Current Adventures" class="char-form">
          <br>
          <input type="submit" class="char-form">
          </div>
        </div>

        <?php $query = "INSERT INTO characters (name, player, level, race, pic, stats, inventory, backstory)
                        VALUES ('{$name}', '{$player}', '{$level}', '{$race}', '{$pic}', '{$stats}', '{$inventory}',
                         '{$backstory}')";?>

    </div> <!--content-->
    </form>