<!DOCTYPE HTML>

<?php
$fname = $_POST["forename"];
$lname = $_POST["surname"];
$dob = $_POST["dob"];
$sex = $_POST["sex"];
$power1 = $_POST["power1"];
$power2 = $_POST["power2"];
$power3 = $_POST["power3"];
$power4 = $_POST["power4"];



echo "Name: " . $fname . " " . $lname  . PHP_EOL . ", Date of birth: " . $dob . . "\n" . " Sex: " . $sex . ", Powers: " . $power1 . " " . $power2 . " " . $power3 . " " . $power4;

?>
</html>