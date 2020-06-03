<?php 
//connect to db
include __DIR__ . '/../database.php';

//utils
include __DIR__ . '/../functions.php';

//get room ID
$id_room = $_GET["id"];

$room = getById ($conn, 'stanze', $id_room);

