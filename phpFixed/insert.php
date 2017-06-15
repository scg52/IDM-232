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


$stmt = $connection->prepare('INSERT INTO characters (name, player, level, race, pic, stats, inventory, backstory) VALUES (?, ?, ?, ?, ?, ?, ?, ?);');

$stmt->bind_param('ssssssss', $name, $player, $level, $race, $pic, $stats, $inventory, $backstory);

$stmt->execute();
$stmt->close();

$id = $connection->insert_id;

$url = 'structure.php?title=character&id='. $id;

//redirect
header('Location: '. $url);


?>