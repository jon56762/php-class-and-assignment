<?php

include('state-capital.php');

echo "1. Search state details\n";
echo "2. Find states by mineral resources\n";
echo "3. Show total population\n";
echo "4. Show higest and lowest states population\n";

if (true) {
    $input = readline("Select your option (1-4): ");
    switch ($input) {
        case 1:
            $search = ucfirst(readline("Search for any state in Nigeria: "));

            if ($search == "") {
                echo "Please search for a state!\n";
            }elseif ($state_capital[$search]) {
                echo "State: {$state_capital[$search]['state']}\n";
                echo "Capital: {$state_capital[$search]['capital']}\n";
                echo "Population: " . number_format($state_capital[$search]['population']). "\n";
                echo "Mineral Resources: {$state_capital[$search]['mineral_resources'][0]}\n";
            } else {
                echo "Error: '$search' not found!";
            }
        
        case 2:
            $mineral = ucfirst(readline("Enter mineral resources: "));
            $foundstate = [];

            foreach ($foundstate as $stateName => $stateDate) {
                if ($stateDate['mineral_resources'][$mineral]) {
                    $found = $stateDate['mineral_resources'][$mineral];
                    echo "yes";
                    // $foundstate[] = $stateName;
                    // echo "States with '$mineral'" . implode(',', $foundstate). "\n";
                }
            }
            // if ($mineral == "") {
            //     echo "Please enter a mineral resources!";
            // } elseif (!empty($foundstate)) {
            //     echo "States with '$mineral'" . implode(',', $foundstate). "\n";
            // }
            break;    

        default:
            # code...
            break;
    }
}