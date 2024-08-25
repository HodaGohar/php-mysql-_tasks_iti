<?php 

$dbType = "mysql";
$host ="localhost";
$password = "";
$dbName = "profile_user";
$userName = "root";

$conn = new PDO("$dbType:host=$host;dbname=$dbName", $userName ,$password);

?>