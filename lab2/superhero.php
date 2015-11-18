<!DOCTYPE HTML>

<?php
$fname = $_POST["forename"];
$lname = $_POST["surname"];
$dob = $_POST["dob"];
$sex = $_POST["gender"];

echo "Name: " . $fname . $lname  . PHP_EOL . "Date of birth: " . $dob;
echo $sex;
?>
</html>