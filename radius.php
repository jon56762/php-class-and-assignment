<?php
$radius = readline("Input Number:");
$circumference = null;
$area = null;
$volume = null;

if ($radius === "") {
    echo "Please Input Number";
} elseif (!is_numeric($radius)) {
    echo "Invalied";
}else {
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 2);
    $volume = round($volume, 2);

    echo "Circumference = {$circumference} \n";
    echo "Area = {$area} \n";
    echo "Volume = {$volume}";
}
?>