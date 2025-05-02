<?php 
$number1 = readline("Input First number:");
$operator = readline("Input Operator(+, *, /, -):");
$number2 = readline("Input Second number:");

if ($operator == "+") {
    echo $number1 + $number2; 
}elseif ($operator == "-") {
    echo $number1 - $number2; 
}elseif ($operator == "*") {
    echo $number1 * $number2;
}elseif ($operator == "/") {
    echo $number1 / $number2;
}elseif ($operator == "%") {
    echo $number1 % $number2;
}elseif ($operator == "") {
    echo "You did not put any input";
}else {
    echo "Error";
}
?>