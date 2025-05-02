<?php
$name = readline("Username:");
$email = readline("Email:");
$password = readline("Password:");

if ($name === "" || $email === "" || $password === ""){
    echo "Please filled all input!.";
} elseif ($name === "Success" && $email === "success@gmail.com" && $password === "succ123") {
    echo "You have successfully logged in";
} else {
    echo "Incorrect input";
}