<?php

$username = "Hayley";
$password = "pass";

  if ($_POST["username"] = $username AND $_POST["password"] = $password){
      echo "logged in";
      setcookie('access_level', 'standarduser');
  } else{
      echo"nope";
  }



?>
/**
 * Created by PhpStorm.
 * User: 1300777
 * Date: 02/11/2015
 * Time: 14:04
 */