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
echo "<p> Connection sucessful</p>";

$sql_query = "SELECT * FROM articletext WHERE topicID='1'";
$result = $db->query($sql_query);
while($row = $result->fetch_array()){
    echo "<p>" . $row['topidID'] . "</p>";
}


?>