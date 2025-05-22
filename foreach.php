<?php 
echo " student name and the score for each subject :\n";

$scores=[
    "Gift"=>[
        "biology"=>[12,2,5],
    "english"=>[12,2,5],
    "maths"=>[12,2,5],

    ],
     "Miracle"=>[
        "biology"=>[12,2,5],
    "english"=>[12,2,5],
    "maths"=>[12,2,5],

    ],
 "divine"=>[
        "biology"=>[12,2,5],
    "english"=>[12,2,5],
    "maths"=>[12,2,5],
    "crs"=>[5,3,10]

    ],
];
// enter an aiput of a user
$enterName=readline("Enter name :");

foreach ($scores as $name => $score) {
  if (strtolower($name)==$enterName) {
    // bring out another input when name already exixt in the data
     $subject=readline("what Subject:");
    
     if ($score[$subject] ?? false) {
        // assign a varable into score 
        $scoreArray=$score[$subject];
         // assign a varable into score 

        // bring out a specific data in an array
        print_r($scoreArray);
// asssign total to score array
    $total=array_sum($scoreArray);
    echo" the subject total is"." ". $total;
        
     }else {
        echo "subject not found";
     }return;
     
}
}


// ensure that the user input is a name and not a number
echo "name is needed";


?>