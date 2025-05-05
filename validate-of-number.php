<?php
$number = readline("Input Number:");
$answer = $number / 3;

if ($number % 3 == 0) {
    echo "This number can be divided by 3 \nAnswer:{$answer}";
} else {
    echo "This number cannot be divided by 3 \nAnswer:{$answer}";
}