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

$score = 0;
$total_question = 0;
$wrong_answer = [];

while (true) {
    echo "----------Basic Quiz Questions-----------\n";
    echo "Select any Subject among this 3: (Mathematics, English, Biology)\n";

    foreach ($quiz_question as $subject => $questions) {
        echo "$subject \n";
    }

    $input = readline("Input the subject of your choice or (exit) to quit: ");

    if ($input === 'exit') break;

    if ($quiz_question[$input]) {
        echo "---------- $input QUIZ ----------\n";
        foreach ($quiz_question[$input] as $number => $ques) {
            $total_question++;
            $useranswer = readline("Q($number): {$ques['question']} ");

            if (strtolower($useranswer) === strtolower($ques['answer'])) {
                $score++;
                echo "Correct\n";
            } else {
                $wrong_answer[] = [
                    'subject' => $input,
                    'question' => $ques['question'],
                    'answer' => $useranswer,
                    'correct_answer' => $ques['answer']
                ];
                echo "Wrong! The correct answer is: {$ques['answer']}\n";
            }
        }
    }

    $continue = strtolower(readline("Do you want to try another subject? (Yes/No): "));
    if ($continue !== 'yes') break;
}

echo "---------- FINAL RESULT ----------\n";
echo "Total Question: $total_question\n";
echo "Correct Answers: $score\n";
echo "Percentage:" . $score/$total_question * 100 . "%\n";

if ($wrong_answer) {
    echo "Incorrect Answer\n";
    foreach ($wrong_answer as $wrong => $failed) {
        echo ($wrong+1) . "Subject: {$failed['subject']}\n";
        echo "Question: {$failed['question']}\n";
        echo "Your Answer: {$failed['answer']}\n";
        echo "Correct Answer: {$failed['correct_answer']}\n";
    }
}
// $num_1 = 2;
// $num_2 ="2";


// if ($num_1 !== $num_2) {
//     $all = $num_1 !== $num_2;
//     echo  $all;
// }