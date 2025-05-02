<?php 
$p = readline("Input principal:$");
$r = readline("Input rate (%):");
$n = 1;
$t = readline("Input time (years):");

if ($p === "" || $r === "" || $t === "") {
    echo "Error. All input must be filled";
}
elseif (!is_numeric($p) || !is_numeric($r) || !is_numeric($t)){
    echo "Number required not character";
}
else {
    $a = $p * pow(($n + $r/100), $t);
    echo "The Total Amount = \${$a} \n";
    $c = $a - $p;
    echo "The Compound Interest = \${$c}";
}
?>