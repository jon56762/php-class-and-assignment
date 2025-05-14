<?php
echo "----------Quiz---------\n";

$quiz_questions = [
    1 => [
        'question' => 'What is the color of Nigeria flag? (Name one)',
        'answer' => 'Green, White'
    ],

    2 => [
        'question' => 'What is the name of the capital city of Nigeria?',
        'answer' => 'Abuja'
    ],

    3 => [
        'question' => 'What currency do people use in Nigeria',
        'answer' => 'Naira'
    ],

    4 => [
        'question' => 'Was Nigeria once ruled by Britain? (Yes or No)',
        'answer' => 'Yes'
    ],

    5 => [
        'question' => 'Who is the current president of Nigeria',
        'answer' => 'Tinubu'
    ]
];

$question = readline("Pick a number from 1to5:");

if ($question == "") {
    echo "Please choose a number 1to5!";
} elseif ($quiz_questions[$question]) {
    $userquestion = $quiz_questions[$question];
    echo "Question: {$userquestion['question']}\n";

    $answer = readline("Put your Answer:");
    if ($answer == "") {
        echo "Please write your answer!";
    }
    elseif ($answer == $userquestion['answer']) {
        echo "You got it correct!\n";
        echo "Answer is = {$userquestion['answer']}";
    } else {
        echo "Wrong answer, Try again next time!\n";
        echo "Answer is = {$userquestion['answer']}";
    }
} else {
    echo "Incorrect";
}