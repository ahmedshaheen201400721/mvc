<?php 
require "./Task.php";

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

// $q="delete from tasks  where id=:id";
$q="insert into tasks(description,iscompleted) values (:d,:i)";
$stmt=$conn->prepare($q);
// $stmt->execute([":id"=>1]);
$stmt->execute([":d"=>"go shopping",":i"=>1]);
// var_export(PDO::getAvailableDrivers());

// $stmt->setFetchMode(PDO::FETCH_CLASS,Task::class);
// $a=$stmt->fetch();
// $conn = null;
// echo $a->iscomplete();
