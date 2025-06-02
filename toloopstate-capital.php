<?php

include('state-capital.php');

foreach ($state_capital as $key => $value) {
    echo "{$value['state']} : {$value['capital']}\n";
}