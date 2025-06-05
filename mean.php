<?php 

echo "score: 0, 1, 2, 3, 4, 5\n";
echo "Frequency: 3, 4, 4, 8, 5 8\n";

$score = [0,1,2,3,4,5];
$frequency = [3,4,4,8,5,8];

echo "fx |";
$fx = 0;
while ($fx <= 0) {
    // the calculation of fx
    $fx++;
    $fx1 = $score[0] * $frequency[0];
    $fx2= $score[1] * $frequency[1];
    $fx3 = $score[2] * $frequency[2];
    $fx4 = $score[3] * $frequency[3];
    $fx5 = $score[4] * $frequency[4];
    $fx6 = $score[5] * $frequency[5];
    echo "$fx1 |";
    echo "$fx2 |";
    echo "$fx3 |";
    echo "$fx4 |";
    echo "$fx5 |";
    echo "$fx6 |";

    echo "\n";

    echo "d |";
    //the calculation of difference
    $d1 = $score[0] - $frequency[0] ;
    $d2 = $score[1] - $frequency[0] ;
    $d3 = $score[2] - $frequency[0] ;
    $d4 = $score[3] - $frequency[0] ;
    $d5 = $score[4] - $frequency[0] ;
    $d6 = $score[5] - $frequency[0] ;
    echo "$d1 |";
    echo "$d2 |";
    echo "$d3 |";
    echo "$d4 |";
    echo "$d5 |";
    echo "$d6 |";

    echo "\n";

    echo "dsquare: |";
    // the calculation of d-square

    $dsquare1 = $d1 * $d1;
    $dsquare2 = $d2 * $d2;
    $dsquare3 = $d3 * $d3;
    $dsquare4 = $d4 * $d4;
    $dsquare5 = $d5 * $d5;
    $dsquare6 = $d6 * $d6;
    echo "$dsquare1 |";
    echo "$dsquare2 |";
    echo "$dsquare3 |";
    echo "$dsquare4 |";
    echo "$dsquare5 |";
    echo "$dsquare6 |";

    echo "\n";

    echo "fdsquare |";

    // the calculation of fd-square

    $fd1 = $frequency[0] * $dsquare1;
    $fd2 = $frequency[1] * $dsquare2;
    $fd3 = $frequency[2] * $dsquare3;
    $fd4 = $frequency[3] * $dsquare4;
    $fd5 = $frequency[4] * $dsquare5;
    $fd6 = $frequency[5] * $dsquare6;

    echo "$fd1 |";
    echo "$fd2 |";
    echo "$fd3 |";
    echo "$fd4 |";
    echo "$fd5 |";
    echo "$fd6 |";
}