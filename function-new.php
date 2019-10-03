<?php
function makeNav($conn, $loggedIn){
    // This creates the navigation from the navigation table
$sql = "SELECT pagename, pagetitle FROM test.navigation";
$result = $conn->query($sql);
echo "<ul style=background-color:pink>";
while ( $row = $result->fetch_assoc()) {
  echo "<li style=list-style-type:none><a style=text-decoration:none; href='".$row['pagename'] . "'>" .$row['pagetitle']. "</a></li>";
}
if ($loggedIn == "Not Logged In"){
    echo "<li style=list-style-type:none><a style=text-decoration:none; href='login.php'>Log In</a></li>";
    }
echo "</ul>";
}
// End of makeNav function

function makeContent($conn, $thispagename){
    // This creates the content from the content table based on the
    // supplied $thispagename variable
    // It will then loop through all the matching content
    // records and exports those individually
  $sql = "SELECT * FROM test.content WHERE pagename =  '$thispagename'";
  $result = $conn->query($sql);
  While($row = $result->fetch_assoc()){
    echo $row['contenttitle'];
    echo $row['content'] ;
  }
}
// End of makeContent
function makeTitle($conn,$thispagename){
    /**This will echo ou the current page title from the content table based on the page name in $thispagename */
    $sql = "SELECT * FROM test.content WHERE pagename =  '$thispagename'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['pagename'];
    
}





