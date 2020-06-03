<?php 

//Connect db_name
include_once __DIR__ . '/../database.php';

//utils
include __DIR__ . '/../functions.php';

//Get room id
if (empty($_POST['id'])) {
  die('ID non corretto');
}

$id_room = $_POST['id'];
$url = "$base_path?del=room";

delete($conn, "stanze", $id_room, $url);