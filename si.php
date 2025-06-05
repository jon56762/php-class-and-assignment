<?php 

function number($principle, $rate, $time) {
    if ($principle == "" || $rate == "" || $time == "") {
    echo "Please fill all input!";
    } else {
        $percetage = $rate / 100;
        $a = $time;
        while ($a <= 10) {
            $interest = $principle * $percetage * $a;
            //echo "So the interest is $interest\n";
            $totalamount = $principle + $interest;
            echo ($a+0) . ": Year's the interest is $interest\n" . "The total amount to be repaid is $totalamount\n";
            $a++;
        }
    }
}

$principle = readline("Input amount: ");
$rate = readline("Input rate: ");
$time = readline("Input time: ");

number($principle, $rate, $time);