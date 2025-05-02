<?php
$Firstname = readline("Firstname:");
$lastname = readline("Lastname:");
$mobilenumber = readline("Mobile Number:");
$email = readline("Email:");
$password = readline("Password:");
$resgisterfirstname = $firstname;
$resgisterlastname = $lastname;
$resgistermobilenumber = $mobilenumber;
$resgisteremail = $email;
$resgisterpassword = $password; 
 
if (!is_numeric($mobilenumber)) {
    echo "Mobile Number must be in Numeric!";
} elseif ($resgisterfirstname == $firstname && $resgisterlastname == $lastname && $resgistermobilenumber == $mobilenumber && $resgisteremail == $email && $resgisterpassword == $password){
    echo "You have successfully resgistered";
}else {
    $resgisteremail = readline("Email");
    $resgisterpassword = readline("Password");
    $loggedemail = $resgisteremail;
    $loggedpassword = $resgisterpassword;

    if ($loggedemail == $resgisteremail || $loggedpassword == $resgisterpassword) {
         echo "Please filled all input";
    }elseif ($loggedemail == $resgisteremail && $loggedpassword == $resgisterpassword) {
         echo "You have logged in.";
    }
}