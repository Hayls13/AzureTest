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

$accessLevel = $_POST[access_level];

displayAccessLevelInformation($accessLevel);

function displayaccessLevelInformation($accessLevel){
    if ($accessLevel == "standarduser"){
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif($accessLevel == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}

?>
