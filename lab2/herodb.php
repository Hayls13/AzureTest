<?php

$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "beff680d970100",
    "29313567",
    "hr1300777"
);

if($db->connect_errno){
    die('Connectfailed['.$db->connect-error.']');
}

$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%laser%'";
    $result = $db->query($sql_query);
while($row = $result->fetch_array()){
    echo "<p>" . $row['superheroName'] . "</p>";
}

$result->close();
    $db->close();

?>