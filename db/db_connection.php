<?php

define("HOST",'localhost');
define("USERNAME",'root');
define("PASSWORD",'');
define("DATABASE",'students_data');

$conn = new mysqli(HOST, USERNAME, PASSWORD,DATABASE);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";



?>