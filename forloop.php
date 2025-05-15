<?php
for ($question1=3; $question1 <= 65 ; $question1++) { 
    // Generate the odd numbers
    if ($question1 % 2 == 0) {
        echo"";
    } else {
        echo $question1;
        echo ";";
    }

    // Generate the intercept numbers
    for ($intercept=15; $intercept <= 100 ; $intercept++) { 
        if ($question1 == $intercept) {
            echo $intercept;
            echo ",";
        }
    }
}