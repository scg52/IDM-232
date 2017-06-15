<?php
//take info from creator.php
      $query = "INSERT INTO characters (name, player, level, race, pic, stats, inventory, backstory)
      VALUES ('{$name}', '{$player}', '{$level}', '{$race}', '{$pic}', '{$stats}', '{$inventory}', '{$backstory}')";
 //redirect
?>