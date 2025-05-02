<?php
$b = readline("Input value (b):");
$a = readline("Input value (a):");
$c = readline("Input value (c):");

if ($b === "" || $a === "" || $c === "" ) {
    echo "Error. All input must be filled";
}elseif (!is_numeric($b) || !is_numeric($a) || !is_numeric($c)) {
    echo "Number required not character";
}else {
    $squareroot = sqrt(pow($b, 2) - 4 * $a * $c);
    $x1 = -$b + $squareroot / 2 * $a;
    echo "X1 = $x1 \n";
    $x2 = -$b - $squareroot / 2 * $a;
    echo "X2 = $x2";
}
?>