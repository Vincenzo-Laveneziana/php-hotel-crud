<?php 
  include __DIR__ . '/../env.php';
  
  //Connessione
  $conn = new mysqli($server_name, $username, $password, $db_name);

  //Check connesione
  if($conn && $conn->connect_error){
    die("Si è verificato un errore");
  }

  echo "Hello database";
?>