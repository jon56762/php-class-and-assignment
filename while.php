<?php

$negative_number = readline("Input first coefficient:");
$positive_number = readline("Input second coefficient:");

$i = $negative_number;
while ($i <= $positive_number) {
    $xsquare = pow($i, 2);
    $value = $xsquare + $i - 2;
    echo "This is the squareroot: {$xsquare} |";
    echo "This is the value of Y: {$value} \n";
    $i++;
}