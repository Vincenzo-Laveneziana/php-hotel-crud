<?php 

//include db
include __DIR__ . '/../database.php';

//utils
include __DIR__ . '/../functions.php';

$rooms = getAll($conn, 'stanze');
