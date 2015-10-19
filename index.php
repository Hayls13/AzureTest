<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p>
    <?php
    /*$name = "Edgar";

    if ($name =="Simon"){
        print "I know you";
    }

    else {
        print "Who are you";
    }

    $object = "specs";

    if($object == "mugs"){
        print "You must be 18 to buy mugs";
    }
        else if ($object == "sausage rolls"){
            print "You must be 21 to buy sausage rolls";
        }
            else {
                print "you must be 16 to buy specs";
            }*/
    $provisionedActivities = array("specs", "drugs", "rock and roll");

        foreach($provisionedActivities as $drugs) {
            print "<p>$drugs</p>";
        }
   $provisionedActivities[1]="hugs";

    unset($provisionedActivities[2]);

    foreach($provisionedActivities as $drugs) {
        print "<p>$drugs</p>";
    }

    ?>
</p>

</body>
</html>