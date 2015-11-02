<?php
session_start();
$username = "Hayley";
$password = "pass";

  if ($_POST["username"] = $username AND $_POST["password"] = $password){
      echo "logged in";
      //setcookie('access_level', 'standarduser');
     // setcookie('$username', "hayley");
      $_SESSION['access_level'] = "standard user";
      $_SESSION['username'] = $username;

  } else{
      echo"nope";
  }

$accessLevel = /*$_COOKIE[access_level];*/ $_SESSION['access_level'];

displayAccessLevelInformation($accessLevel);

function displayaccessLevelInformation($accessLevel){
    if ($accessLevel == "standarduser"){
        echo "<p>You are currently logged in as a standard user</p>";
        print $_SESSION['access_level'];
    }
    elseif($accessLevel == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}

?>
