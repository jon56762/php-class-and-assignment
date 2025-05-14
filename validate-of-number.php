<?php
$number = readline("Input Number:");

if ($number == "") {
    echo "Please input a number!";
} elseif ($number % 3 == 0) {
    $answer = $number / 3;
    echo "This number can be divided by 3 \nAnswer:{$answer}";
} else {
    $answer = $number / 3;
    echo "This number cannot be divided by 3 \nAnswer:{$answer}";
}