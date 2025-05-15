<?php

$items = [
    'Fruits' => ['Apple', 'Orange', 'Mango', 'Banana'],
    'Beverage' => ['Milo', 'Cowball Chocolate', 'Overtea'],
    'Drinks' => [
        'Soft drinks' => ['Fanta', 'Coca-cola'],
        'Alcohol' => ['Capital jack', 'lord'],
        'Juice' => ['Chivita', 'Chiexotic', 'Holland Yoghurt']
    ],
    'Biscult' => ['Top', 'Fibre active', 'Digestive']
];

$create = [
    echo $items['']
];

$read = [
    echo $items["$read"]
];

$C = $create;
$R = $read;
$U = $update;
$D = $delete;

$store = readline("CRUD:");

if ($store == "") {
    echo "Please Select!";
} elseif ($store == "C") {
    echo $create;
}