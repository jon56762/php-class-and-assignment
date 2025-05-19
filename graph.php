<?php
echo "y = xsquare + x -2 from:\n";
$x_start = readline("x = (x-start)");
$x_end = readline("to x = (x-end)");

// applying the calucated xsquare to the array
echo "x |";
$x = $x_start;
while ($x <= $x_end) {
    echo "$x |";
    $x++;
}
echo "\n";

echo "xsquare |";
$x = $x_start;
while ($x <= $x_end) {
    $xsquare = pow($x, 2);
    echo "$xsquare |";
    $x++;
}
echo "\n";

echo "-2 |";
$x = $x_start;
while ($x <= $x_end) {
    echo "-2 |";
    $x++;
}
echo "\n";

echo "y |";
$x = $x_start;
while ($x <= $x_end) {
    $y = $xsquare + $x - 2;
    echo "$x |";
    $x++;
}
echo "\n";