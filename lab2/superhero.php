<!DOCTYPE HTML>

<?php
$fname = $_POST["forename"];
$lname = $_POST["surname"];
$dob = $_POST["birthdate"];
$sex = $_POST["gender"];

echo "Name: " . $fname . $lname  . "Date of birth: " . $dob;
echo $sex;
?>
</html>