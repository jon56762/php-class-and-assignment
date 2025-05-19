<?php

$x = readline("Input the first number coeffient:");
$xvalues = readline("Input the second coeffient:");

$solve = $x;
while ($solve <= $xvalues) { 
// Calculating xsquare and y
    $xsquare = pow($solve, 2);
    $y = $xsquare + $solve - 2;

// applying the calucated xsquare to the array

echo "xsquare = ";
echo "$xsquare ";

// applying the calucated y to the array

echo "y = "; 
echo "$y \n";

$solve++;
}