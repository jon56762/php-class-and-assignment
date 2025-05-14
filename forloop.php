<?php

/*for ($i=0; $i <= 10; $i++) { 
    echo "$i \n";
}*/

/*for ($i=-5; $i <= 23; $i++) { 
    echo "$i \n";
}

echo "---------------\n";

for ($i=3.5; $i >= -5; $i--) { 
    echo "$i \n";
}*/

echo "(1)List all odd numbers between 3 - 65\n";
for ($i= 3; $i <= 65; $i++) { 
    
    if ($i % 2 == 0) {
        echo "";
    } else {
        echo "$i \n";
    }
}

echo "(2)Find the intercept between 15 and 100\n";
for ($i=15; $i <= 100; $i++) { 
    if ($i %  15== 0) {
        echo "";
    }else {
        echo "$i \n";
    }
}

echo "(3)Find the union between 51 and 70\n";
for ($i=51; $i <= 70; $i++) { 
    if ($i == 51 % 70) {
        echo "$i \n";
    }
}