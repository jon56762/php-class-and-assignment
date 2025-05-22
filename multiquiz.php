<?php

$quiz_question = [
    'Mathematics' => [
        1 => [
            'question' => 'What is 15 + 23?',
            'answer' => 38
        ],

        2 => [
            'question' => 'Calculate 7 * 8',
            'answer' => 56
        ],

        3 => [
            'question' => 'Solve: 24 / 2',
            'answer' => 12
        ],

        4 => [
            'question' => 'A shape with 4 equal sides is called a ________',
            'answer' => 'Square'
        ],

        5 => [
            'question' => 'Solve: 144 - 32',
            'answer' => 112
        ]
    ],

    'English' => [
        1 => [
            'question' => 'Which article is correct: "a" ot "an" before the word "Elephant"?',
            'answer' => 'An'
        ],

        2 => [
            'question' => 'Identify the verb in this sentence: "She runs quickly to the park"',
            'answer' => 'Runs'
        ],

        3 => [
            'question' => 'What is the plural of "child"',
            'answer' => 'Children'
        ]
    ],

    'Biology' => [
        1 => [
            'question' => 'Plants make food through a process called ___________',
            'answer' => 'Photosynthesis'
        ],

        2 => [
            'question' => 'Which organ pumps blood in the Human body',
            'answer' => 'Heart'
        ],

        3 => [
            'question' => 'What is the largest organ in the human body',
            'answer' => 'Skin'
        ],

        4 => [
            'question' => 'A fish is a vertebrate. (True/False)',
            'answer' => 'True'
        ],

        5 => [
            'question' => 'The basic unit of life is called a _________',
            'answer' => 'Cell'
        ]
    ]
];

echo "----------Basic Quiz Questions-----------\n";
echo "Select any Subject among this 3: (Mathematics, English, Biology)\n";


$proceed_qa = true;

$available_subjects = ["Mathematics", "English", "Biology"];
$score = 2;
$x = 1;
// echo(count($quiz_question["Mathematics"]));
while($proceed_qa){
    $input = readline("Input your subject: ");
    $subject_exist = in_array($input, $available_subjects)?"it_exist":"non_found";

    if($subject_exist === "non_found"){
        $proceed_qa = false;
        echo("this subject does not exist");
        break;
    }
    $current_question_length = count($quiz_question[$input]);

    do{
        $question = $quiz_question[$input][$x]["question"];
        echo $question;
        $x++;
        $ans = readline(": ");
        if ($ans == $question["answer"]) {
            echo "You got it correct";
        }
        // echo($quiz_question[$input][$x]["answer"]);
        // echo($ans == $quiz_question[$input][$x]["answer"]?"correct \n":"wrong \n");
    }while($x <= $current_question_length);

    // echo "Do you want to continue? input Yes to continue / No to exist \n";

    // $comfirm = readline("Input your option (Yes/NO):");
    // if ($comfirm == "Yes") {
        
    // } elseif ($comfirm == "No") {
    //     if ($ans = $quiz_question[$input][$x]['answer']) {
    //         echo "Your total score = $score";
    //     }
    //     $ans = $quiz_question[$input][$x]["answer"]?"$score \n":"wrong \n";
    //     echo $ans;
        
    // }


}



// for ($i=0; $i <= $quiz_question[$input]; $i--) { 
//     $current_question = $quiz_question[$input];

//     echo $current_question[1]['question'];
// }

// $a = 0;
// do {
//     $current_question = $quiz_question[$input];
//     echo $current_question[2]['question'];
//     $a++;
// } while ($a <= $quiz_question[$input]);
/*if ($input == "") {
    echo "Select any subject of your choice!!!";
} elseif ($quiz_question["$input"]) {
    $userselect = $quiz_question[$input];
    echo "Subject: $input\n";
    echo "Question: {$userselect[2]['question']}\n";

    $answer = readline("Put your answer:");

    if ($answer == "") {
        echo "You dont write your answer!";
    } elseif ($answer == $userselect[2]['answer']) {
        echo "Your answer is correct\n";
        echo "Answer is = {$userselect[2]['answer']}";
    } else {
        echo "Your answer is wrong!\n";
        echo "The correct answer is = {$userselect[2]['answer']}";
    }
} else {
    echo "Incorrect";
}*/