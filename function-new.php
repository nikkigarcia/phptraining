<?php
function makeNav($conn){
$sql = "SELECT * FROM test.content";
$result = $conn->query($sql);
echo "<ul>";
while ( $row = $result->fetch_assoc()) {
  echo "<li><a href='index.php?page=" . $row['pagename'] . "'>" . $row['pagename'] . "</a></li>";
}
echo "</ul>";
}
// End of makeNav function

function makeContent($conn, $thispagename){
  $sql = "SELECT * FROM test.content WHERE pagename =  '$thispagename'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
    echo "<p>" . $row['pagetitle'] . "</p>";
    echo "<p>" . $row['pagename'] . "</p>";
    echo $row['pagecontent'];
}

function makeTitle($conn,$thispagename){
    $sql = "SELECT * FROM test.content WHERE pagename =  '$thispagename'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['pagename'];
    
}



