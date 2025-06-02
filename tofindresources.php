<?php

include('state-capital.php');

$search = readline("Input any mineral resources: ");

if ($search == "") {
    echo "Please input any mineral resources!";
}

if (true) {
    foreach ($state_capital as $state) {
  
        if (in_array($search, $state["mineral_resources"])) {
            // echo "yes\n";
            echo "{$state['state']}\n";
            
        }
    }
}

// while (true) {
    
// }