<?php 
$servername = "localhost";
$username = "ahmed";
$password = "ahmed";
$database = "todo";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$q="select * from tasks";
$t=$conn->query($q);
var_export($t->fetch(PDO::FETCH_ASSOC));
// $conn = null;