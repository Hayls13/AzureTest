<?php

$username = "Hayley";
$password = "pass";

  if ($_POST["username"] !== $username AND $_POST["password"] !== $password){
      echo "nope"
      setcookie('access_level', 'standarduser');

  }



?>
/**
 * Created by PhpStorm.
 * User: 1300777
 * Date: 02/11/2015
 * Time: 14:04
 */