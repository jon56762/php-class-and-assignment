<?php

$a = readline("Input First number:");
$b = readline("Input second number:");

// if ($a > $b) {
//     echo "Firstnumber is greater than the Secondnumer";
// } else {
//     echo "Secondnumber is greater than the firstnumber";
// }

// if ($a < $b) {
//     echo "Firstnumber is less than the Secondnumber";
// } else {
//     echo "Secondnumber is less than the Firstnumber";
// }

if ($a < $b ) {
    echo "Less";
} elseif ($a == $b) {
    echo "Equal";
} else {
    echo "Greater";
}