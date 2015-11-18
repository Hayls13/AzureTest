<?php

$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "beff680d970100",
    "29313567",
    "hr1300777"
);

if($db->connect_errno){
    die('Connectfailed'['.$db->connect-error.']);
}

$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%laser%'";

?>