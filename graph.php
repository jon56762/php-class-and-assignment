<?php

$xvalues = [-3, -2, -1, 0, 1, 2, 3,];
$xsquare = [];
$two = [];
$y = [];

// Calculating xsquare and y 
for ($solve=0; $solve < 7; $solve++) { 
    $x = $xvalues[$solve];
    $xsquare[$solve] = $x * $x;
    $two[$solve] = - 2; 
    $y[$solve] = $xsquare[$solve] + $x - 2;
}

// applying the calucated xvalues to the array
echo "x :";
for ($solve=0; $solve < 7; $solve++) { 
    echo "{$xvalues[$solve]} |";
}

echo "\n";

// applying the calucated xsquare to the array

echo "xsquare :";
for ($solve=0; $solve < 7; $solve++) { 
    echo "{$xsquare[$solve]} |";
}

echo "\n";

echo "two :";
for ($solve=0; $solve < 7; $solve++) { 
    echo "{$two[$solve]} |";
}

echo "\n";

// applying the calucated y to the array

echo "y :";
for ($solve=0; $solve < 7; $solve++) { 
    echo "{$y[$solve]} |";
}