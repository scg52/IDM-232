<?php
require_once('config.php');

$name = $_POST['name'];
$player = $_POST['player'];
$race = $_POST['race'];
$level = $_POST['level'];
$pic = $_POST['pic'];
$stats = $_POST['stats'];
$inventory = $_POST['inventory'];
$backstory = $_POST['backstory'];
<<<<<<< HEAD
$adventure = $_POST['adventure'];

$query = $connection->prepare('INSERT INTO characters (name, player, level, race, pic, stats, inventory, backstory, adventure) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);');

$query->bind_param('sssssssss', $name, $player, $level, $race, $pic, $stats, $inventory, $backstory, $adventure);

$query->execute();
$query->close();
=======


$stmt = $connection->prepare('INSERT INTO characters (name, player, level, race, pic, stats, inventory, backstory) VALUES (?, ?, ?, ?, ?, ?, ?, ?);');

$stmt->bind_param('ssssssss', $name, $player, $level, $race, $pic, $stats, $inventory, $backstory);

$stmt->execute();
$stmt->close();
>>>>>>> origin/master

$id = $connection->insert_id;

$url = 'structure.php?title=character&id='. $id;

//redirect
header('Location: '. $url);

<<<<<<< HEAD
=======

>>>>>>> origin/master
?>