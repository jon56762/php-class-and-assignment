<?php

$age = readline("Age:");
$gender = readline("Gender(M/F):");

switch ($age && $gender) {
    case ($age >= 18 && $gender == "M"):
        echo "Good Morning Sir!";
        break;
    case ($age < 18 && $gender == "M"):
        echo "Good Morning!";
        break;
    case ($age >= 18 && $gender == "F"):
        echo "Good Morning Ma'am!";
        break;
    case ($age < 18 && $gender == "F"):
        echo "Good Morning!";
        break;
    default:
        echo "Invaid input";
        break;
}