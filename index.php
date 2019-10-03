<?php
session_start();
// require_once('nav.php');
// require_once('content.php');
require_once('connect.php');
require_once('function-new.php');
$loggedIn = $_SESSION['loggedin'];
// this pulls the text from after the first / in the url and sets it to an array
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
// This pulls the last item out of the uri array and sets $thisPagename variable to that item
$thisPagename = array_pop($uriSegments) ;
// This sets the pagename if none is provided in the url
if ($thisPagename == ""){
  $thisPagename = "index";
}
/*$loggedin = False;
 $servername="localhost";
 $username="root";
 $password="secret";
 create connection

 $conn = new mysqli($servername, $username, $password);
 check connection
 if ($conn->connect_error){
   die("No worky".$conn->connect_error);
 }else{
   $success = "It worked!";
}
$thisPagename = $_GET["page"] ?? "Home";*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title><?php //makeTitle($conn, $thisPagename);?></title>
  </head>
<body>
  <nav>
    <?php
    makeNav($conn, $loggedIn);
    echo "<p>" . $loggedIn . "</p>";
    ?>
  </nav>
  <section>
    <div>
        <?php 
        // echo $thisPagename;
          makeContent($conn, $thisPagename);
          
        ?>
    </div>
  </section>
</body>
</html>
