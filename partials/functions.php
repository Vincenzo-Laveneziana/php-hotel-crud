<?php 


//Get all records from a database table
function getAll($conn, $table){

  $sql = "SELECT * FROM `$table`";
  $result = $conn->query($sql);
  //var_dump($result);

  if($result && $result->num_rows > 0){

    $records = [];
    while($row = $result->fetch_assoc()){
      //var_dump($row);
      //echo "ID: {$row['id']} --Floor: {$row['floor']} <br>";

      //popolo array con le singole stanze
      $records[] = $row;
    }
  } elseif($result){
    $records = [];
  } else {
    $records = false;
  }

  //Close the database connection
  $conn->close();

  return $records;
}


//get single by id_room
function getById ($conn, $table, $id){
  //quer selected room
  $sql = "SELECT * FROM `$table` WHERE `id` = $id";
  $result = $conn->query($sql);
  //var_dump($result);

  if($conn && $result->num_rows > 0){
    $record = $result ->fetch_assoc();
    //var_dump($room);
  } elseif($result){
    $record = [];
  }else{
    $record = false;
  }

  //Close connection
  $conn->close();

  return $record;
}


//delete a record by id
function delete($conn, $table, $id, $url){
    //query
  $sql = "DELETE FROM `stanze` WHERE `id` = $id ";
  $result = $conn->query($sql);

  var_dump($result);

  if($result && $conn->affected_rows > 0){
    header("Location: $url");
  }elseif($result){
    die('Nessuna stanza trova') ;
  }else{
    die('Si è verificato un errore') ;
  }

  $conn->close();
}

