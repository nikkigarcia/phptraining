<?php
$servername = "localhost";
$username = "root";
$password = "secret";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error){
    die("No worky".$conn->connect_error);
  }else{
    $success = "It worked!";
  }

?>