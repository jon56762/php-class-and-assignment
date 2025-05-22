<?php

// $age = readline("Input your age");
// $validate = ($age >= 18) ? 'Adult' : 'Under age';
// echo $validate;

// $name = readline("Input value:");
// $firstname = readline("Comparison:");

// //$condition = ($name === $firstname) ? 'Login' : 'Try again';

// if ($name !== $firstname) {
//     echo "Correct";
// } else {
//     echo "Try again";
// }
//echo $condition;

// if ($a > $b) {
//     echo "Firstnumber is greater than the Secondnumer";
// } else {
//     echo "Secondnumber is greater than the firstnumber";
// }

// if ($a < $b) {
//     echo "Firstnumber is less than the Secondnumber";
// } else {
//     echo "Secondnumber is less than the Firstnumber";
// }

// if ($a < $b ) {
//     echo "Less";
// } elseif ($a == $b) {
//     echo "Equal";
// } else {
//     echo "Greater";
// }

// $a = readline("Input the value of a:");
// $b = readline("Input the value of b:");

// if ($a == 10 xor $b == 10) {
//     echo "All are met";
// } else {
//     echo "Its not met";
// }

// $age = readline("input age:");

// switch ($age) {
//     case 18:
//     case 17:
//     case 16:
//         echo "Adult";
//        break;         
    
//     default:
//         # code...
//         break;
// }

//$fruit = ['apple', 'orange', 'mango'];

// $student = [
//     'name' => 'Mark',
//     'age' => 36
// ];

// unset($student['age']);
// $student['name'] = 'Success';
// echo $student['name'];

$student = [
    'Success' => 'A1',
    'Harrison' => 'F9',
    'Faith' => 'C3'
];

$input = readline("Input your name: ");

if ($input == "") {
    echo "Please input your name";
} elseif ($student[$input]) {
    $check = $student[$input];
    echo "You score $check";
} else {
    echo "User not found";
}