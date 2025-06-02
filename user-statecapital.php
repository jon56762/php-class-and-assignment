<?php

include('state-capital.php');

while (true) {
    echo "Nigaria States Information System\n";
    echo "1. Search state details\n";
    echo "2. Find states by mineral resources\n";
    echo "3. Show total population\n";
    echo "4. Show average population\n";
    echo "5. Show higest and lowest states population\n";
    echo "6. Exit\n";

    $input = readline("Select your option(1-5): ");

    switch ($input) {
        case 1:
            $search = readline("Search any State in Nigeria: ");
            if ($search == "") {
                echo "Please a State you want to find";
            }
            elseif ($state_capital[$search]) {
                echo "State: {$state_capital[$search]['state']}\n";
                echo "Capital: {$state_capital[$search]['capital']} \n";
                echo "Population: " . number_format($state_capital[$search]['population'])." \n";
                echo "Mineral Resources: {$state_capital[$search]['mineral_resources'][0]} \n";
            } else {
                echo "Error: State '$search' not found!\n";
            }
            break;
        
        case 2:
            $mineral = readline("Enter mineral resources: ");
            $foundstate = [];
            $found = false;
            foreach ($state_capital as $stateName => $stateData) {
                if (!isset($stateData['mineral_resources'])) {
                    continue;
                }
                foreach ($stateData['mineral_resources'] as $resource) {
                    if (strtolower($resource) == strtolower($mineral)) {
                        $foundstate [] = $stateData['state'];
                        $found = true;
                    }
                }   
            }

            if (!empty($foundstate)) {
                echo "States with '$mineral' " . implode(',', $foundstate). "\n";
            } else {
                echo "State with '$mineral' Not Found!";
            }
            
            break;
        
        case 3:
            $total = 0;
            foreach ($state_capital as $state) {
                $total += $state['population'];
            }
            echo "Total Population of Nigeria: " . number_format($total) . "\n";
            break;    
        
        case 4:
            $total = 0;
            foreach ($state_capital as $state) {
                $average = count($state);
                $total += $state['population'];
                $averagepopulation = $total / $average;
            }
            echo "The avarage populaion of Nigeria: " . number_format($averagepopulation) ."\n";
            break;    
        case 5:
            
            $maxstate = '';
            $minstate = '';
            $maxpopulation = null;
            $minpopulation = null;

            foreach ($state_capital as $state) {
                $normalpopulation = $state['population'];
                
                if ($maxpopulation == null) {
                    $maxpopulation = $normalpopulation;
                    $minpopulation = $normalpopulation;
                    $maxstate = $state['state'];
                    $minstate = $state['state'];
                }

                if ($normalpopulation > $maxpopulation) {
                    $maxpopulation = $normalpopulation;
                    $maxstate = $state['state'];
                }

                if ($normalpopulation < $minpopulation) {
                    $minpopulation = $normalpopulation;
                    $minstate = $state['state'];
                }
            }

            echo "The most populated state in Nigeria: $maxstate: " . number_format($maxpopulation). "\n";
            echo "The lowest populated state in Nigeria: $minstate: " . number_format($minpopulation). "\n";

            break;   
        
        case 6:
            exit('Thanks!');
            break;    

        default:
            echo "Invalid option! Please try again. \n";
            break;
    }
}