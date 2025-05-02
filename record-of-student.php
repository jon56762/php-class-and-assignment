<?php
$name = readline("Username:");

if ($name == "") {
    echo "Please input username!";
} elseif ($name == "Success" || $name == "Divine" || $name == "Gift" || $name == "James" || $name == "Monday" || $name == "Miracle" ||
         $name == "Victory" || $name == "Ebube" || $name == "Emmanuel" || $name == "Kindrick") {
    $users = array(
        "Success"=>"THE INFO OF SUCCESS\nFirstname:Success\nLastname:Jonathan\nMobileNumber:09114906106\nEmail:success@gmail.com\nPassword:succ123",
        "Divine"=>"THE INFO OF DIVINE\nFirstname:Divine\nLastname:Okoro\nMobileNumber:07088443453\nEmail:divineoko@gmail.com\nPassword:didi544",
        "Gift"=>"THE INFO OF Gift\nFirstname:Gift\nLastname:Chinadu\nMobileNumber:07070492287\nEmail:chigift56@gmail.com\nPassword:gift324",
        "James"=>"THE INFO OF JAMES\nFirstname:James\nLastname:Paul\nMobileNumber:07034563793\nEmail:pauljame54@gmail.com\nPassword:jamespu4",
        "Monday"=>"THE INFO OF MONDAY\nFirstname:Monday\nLastname:Oyibo\nMobileNumber:08125683632\nEmail:mondayoy@gmail.com\nPassword:mon43day",
        "Miracle"=>"THE INFO OF MIRACLE\nFirstname:Miracle\nLastname:Sam\nMobileNumber:09153728647\nEmail:miracs56@gmail.com\nPassword:sammir546",
        "Victory"=>"THE INFO OF VICTORY\nFirstname:Victory\nLastname:Emeka\nMobileNumber:0814562839\nEmail:victory99@gmail.com\nPassword:vicky32",
        "Ebube"=>"THE INFO OF EBUBE\nFirstname:Ebube\nLastname:Clinton\nMobileNumber:07094673526\nEmail:cliebube@gmail.com\nPassword:ebu6789",
        "Emmanuel"=>"THE INFO OF EMMMANUEL\nFirstname:Emmanuel\nLastname:Okoh\nMobileNumber:09123546432\nEmail:emmaokoh@gmail.com\nPassword:emam876",
        "Kindrick"=>"THE INFO OF KINDRICK\nFirstname:Kindrick\nLastname:Jeh\nMobileNumber:07085435673\nEmail:jenkin@gmail.com\nPassword:drick890"
    );
    echo $users["$name"];
}else {
    echo "No user found!";
}
?>