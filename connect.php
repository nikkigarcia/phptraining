<?php
// $loggedIn = "not logged in";
$_SESSION["loggedin"] = "logged in";
// This allows apache to redirect files based on .htaccess
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "secret";
// create connection
$conn = new mysqli($servername, $username, $password);
// check connection
if ($conn->connect_error){
    die("No worky".$conn->connect_error);
  }else{
    $success = "It worked!";
  }



















