<?php

$username = "Hayley";
$password = "pass";

  if ($_POST["username"] = $username AND $_POST["password"] = $password){
      echo "logged in";
      setcookie('access_level', 'standarduser');
      setcookie('$username', "hayley");
  } else{
      echo"nope";
  }



?>
