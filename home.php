<?php

echo"Hello World\n" ;

$number_1 = 20;
$number_2 = 30;

$number_3 = $number_2 - $number_1;

echo"The difference between $number_1 and $number_2 =
    $number_3" . "<br>";

    function greetingFunction () {
        $name = "Juma";
        echo"Good afternoon, Mr"  ."<u>"."<b>" .$name. "</b>"."</u>". "<br>"."How are you.\n";
    }

    greetingFunction();

function weekendGreetings () {
    $d = date   ("D");
    if ($d == "Fri")
    echo"Have a nice weekend";
else
echo "Its a Thursday, Have a nice day";}

weekendGreetings ();
?>