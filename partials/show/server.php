<?php 
//connect to db
include __DIR__ . '/../database.php';

//get room ID
$id_room = $_GET["id"];

//quer selected room
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);
//var_dump($result);

if($conn && $result->num_rows > 0){
  $room = $result ->fetch_assoc();
  //var_dump($room);
} elseif($result){
  echo "No result";
}else{
  echo "No query result";
}

//Close connection
$conn->close();