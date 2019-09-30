<?php
// require_once('nav.php');
// require_once('content.php');
require_once('connect.php');
require_once('function-new.php');
// $loggedin = False;
// $servername="localhost";
// $username="root";
// $password="secret";
// create connection

// $conn = new mysqli($servername, $username, $password);
// check connection
// if ($conn->connect_error){
//   die("No worky".$conn->connect_error);
// }else{
//   $success = "It worked!";
// }

$thisPagename = $_GET["page"] ?? "Home";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title><?php makeTitle($conn, $thisPagename);?></title>
  </head>
<body>
  <nav>
    <?php
    makeNav($conn);
    ?>
  </nav>
  <section>
    <div>
        <?php 
          makeContent($conn, $thisPagename);
          
        ?>
    </div>
  </section>
</body>
</html>
