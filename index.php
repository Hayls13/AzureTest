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
            }
    $provisionedActivities = array("specs", "drugs", "rock and roll");

        foreach($provisionedActivities as $drugs) {
            print "<p>$drugs</p>";
        }
   $provisionedActivities[1]="hugs";

    foreach($provisionedActivities as $drugs) {
        print "<p>$drugs</p>";
    }


    unset($provisionedActivities[2]);

    foreach($provisionedActivities as $drugs) {
        print "<p>$drugs</p>";
    }*/

    $myarray = array("specs", "mugs", "sausage rolls");
    for ($i = 1; $i <30; $i++){
        $na = array();
            if($i %2 ==0){
                $na[0] = $myarray[0];
            }
        if($i %3 ==0){
            $na[1] = $myarray[1];
        }
        if($i %4 ==0){
            $na[2] = $myarray[2];
        }
        print "On day $i available products are: ";
        foreach($ca as $c){
            print "$c";
        }
        print "\n";
    }
}


       
    ?>
</p>

</body>
</html>