<?php 

//connect to database
include_once __DIR__ . '/../database.php';

//check id
if(empty($_POST['id'])){
  die("Id non esistente");
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

//perfom update
$sql = "UPDATE `stanze`
        SET `room_number`= $room_number, `beds` = $beds,`floor` = $floor
        WHERE `id` = $id_room";


$result = $conn->query($sql);

if($result && $conn->affected_rows > 0){
  header("Location: $base_path/show.php?id=$id_room ");
}elseif($result){
  die("Nessuna room trovata");
}else{
  die("Si è verificato un errore");
}
//close connection
$conn->close();