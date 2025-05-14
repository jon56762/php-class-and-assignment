<?php
echo "---LOGIN---\n";

$users = [
    'Peter' => 'Welcome Back',
    'James' => 'Welcome Back',
    'John' => 'Welcome Back',
    'Miracle' => 'Welcome Back',
    'Ali' => 'Welcome Back',
    'Musa' => 'Welcome Back',
    'Jonathan' => 'Welcome Back',
    'Kindrick' => 'Welcome Back',
    'Sam' => 'Welcome Back',
    'Williams' => 'Welcome Back',

];

$name = readline("Username:");

if ($name == ""){
    echo "Please fill input!.";
} elseif ($users["$name"]) {
    echo "You have successfully logged in\n";
    echo $users["$name"];
} else {
    echo "Incorrect input";
}