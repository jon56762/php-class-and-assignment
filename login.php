<?php
echo "---REGISTRATION---\n";
$register_name = readline("Your Fullname:");
$register_number = readline("Mobile Number:");
$register_email = readline("Email:");
$register_gender = readline("Gender(M/F):");
$register_password = readline("Password:");


$logged_email = null;
$logged_password = null;

if ($register_name == "" || $register_number == "" || $register_email == "" || $register_gender == "" || $register_password == "") {
    echo "All field must be complete!";
} else {
    if ($register_gender == "M") {
        echo "Good Day Mr {$register_name}\n";

        if ($register_name && $register_number && $register_email && $register_gender && $register_password) {
            echo "---You Are Have Successfully Registred!---\n";
            echo "Your Username:{$register_name}\n";
            echo "Your Number:{$register_number}\n";
            echo "Your Email Address:{$register_email}\n";
            echo "Your Gender:{$register_gender}\n";
            echo "Your Password don't share it with anyone:{$register_password}\n";
        }
    } elseif ($register_gender == "F") {
        echo "Good Day Mrs {$register_name}\n";
        
        if ($register_name && $register_number && $register_email && $register_gender && $register_password) {
            echo "---You Are Have Successfully Registred!---\n";
            echo "Your Username:{$register_name}\n";
            echo "Your Number:{$register_number}\n";
            echo "Your Email Address:{$register_email}\n";
            echo "Your Gender:{$register_gender}\n";
            echo "Your Password don't share it with anyone:{$register_password}\n";
        }
    } else {
        echo "Input a gender M/F";
    } 
    
}

/*$logged_email = $register_email;
$logged_password = $register_password;

if ($logged_email === $register_email && $logged_password === $register_password) {
    echo "You have logged in!";
} else {
    echo "Incorrect please try again!";
}*/