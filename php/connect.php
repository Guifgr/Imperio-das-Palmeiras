<?php

$servername = "127.0.0.1:3306";
$username = "u754421247_demo";
$password = "Nubhue040499";

try {
  $conn = new PDO("mysql:host=$servername;dbname=u754421247_demo", $username, $password);
  $conn->exec("SET CHARACTER SET utf8");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
//  echo "Connection failed: " . $e->getMessage();
  header("location: /pages/404.php");
}
