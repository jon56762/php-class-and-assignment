<?php 

// $ussd = [
//     '*312#' => '1 My Area
//                 2 Data Plans
//                 3 18GB @N5000
//                 4 10GB @N3000
//                 5 3.5GB+3.5GB @N1500
//                 6 2GB+2GB @N750
//                 7 1GB+1GB @500
//                 8 1GB @350
//                 9 1.5GB @N400
//                 * Next',
//     '*310#'            
// ]
while (true) {
    $input = readline(": ");
    if (($input)) {
        switch ($input) {
            case '*310#':
                echo "Main Bal:0.16 ; Loan Bal:1057.50; Talktime Bal:N0.00 . Your balance is Low. N10k INSTANTLY if you answer 10 Trivia questions @N50/day. Dail\n";
                echo "* Next\n";

                break;
        
            case '*312#':
                echo "1 My Area\n";
                echo "2 Data Plans\n";
                echo "3 18GB @N5000\n";
                echo "5 3.5GB+3.5GB @N1500\n";
                echo "6 2GB+2GB @N750\n";
                echo "7 1GB+1GB @500\n";
                echo "8 1GB @350\n";
                echo "9 1.5GB @N400\n";
                echo "* Next\n";
                $select = readline(": ");
                if ($select == "") {
                    exit('Try again');
                }elseif ($select == 1) {
                    echo "Ooops. You are not qualified for My Area Offer. Dial *312*8# for 1GB @N350.\n";
                    break;
                } elseif ($select == 2) {
                    echo "1 Daily Plans\n";
                    echo "2 Binge Plans\n";
                    echo "3 Weekly Plans\n";
                    echo "4 Monthly Plans\n";
                    echo "5 Big Monthly Plans\n";
                    echo "6 3Months+ Plans\n";
                    echo "7 Social Plans\n";
                    echo "8 Everyday Plans\n";
                    echo "22 Back\n";
                    echo "0 Menu\n";
                }
                break;
            default:
                # code...
                break;
        }
    } else {
        echo "Invalied Input!";
    }
}
?>