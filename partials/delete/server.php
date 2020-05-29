<?php 

//Connect db_name
include_once __DIR__ . '/../database.php';

//Get room id
if (empty($_POST['id'])) {
  die('ID non corretto');
}

$id_room = $_POST['id'];

//query
$sql = "DELETE FROM `stanze` WHERE `id` = $id_room ";
$result = $conn->query($sql);

var_dump($result);

if($result && $conn->affected_rows > 0){
  header("Location: $base_path?del=1");
}elseif($result){
  echo 'Nessuna stanza trova';
}else{
  echo 'Si è verificato un errore';
}