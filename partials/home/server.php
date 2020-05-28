<?php 

include __DIR__ . '/../database.php';

//Ottenere la lista delle stanza in homepage
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);
//var_dump($result);

if($result && $result->num_rows > 0){

  $rooms = [];
  while($row = $result->fetch_assoc()){
    //var_dump($row);
    //echo "ID: {$row['id']} --Floor: {$row['floor']} <br>";

    //popolo array con le singole stanze
    $rooms[] = $row;
  }
} elseif($result){
  echo "No result";
} else {
  echo "Query error";
}

//Close the database connection
$conn->close();

