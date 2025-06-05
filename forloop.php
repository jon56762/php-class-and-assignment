<?php
$a = 3;
while ($a <= 65) {
   if ($a % 2 == 0) {
        echo"";
    } else {
        echo $a;
        echo ";";
    } 
    $a++;
    echo "\n";
    $b = 15;
    while ($b <= 100) {
        if ($a == $b) {
            echo $b;
            echo ",";
        }

        $b++;
    }
}