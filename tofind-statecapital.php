<?php

include('state-capital.php');

$input = readline("Search any State in Nigeria:");
if ($input == "") {
    echo "Please a State you want to find";
}
elseif ($state_capital["$input"]) {
    $state = $state_capital[$input];
    echo "State: $input\n";
    echo "Capital: {$state['capital']} \n";
    echo "Population: {$state['population']} \n";
    echo "Mineral Resources: {$state['mineral_resources'][0]} \n";
} else {
    echo "Error: State '$input' not found!";
}