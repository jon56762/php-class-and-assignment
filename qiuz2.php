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

$score = null;
$total_question = null;
$wrong_answer = [];

while (true) {
    echo "----------Basic Quiz Questions-----------\n";
    echo "Select any Subject among this 3: (Mathematics, English, Biology)\n";

    foreach ($quiz_question as $subject => $question) {
        echo "$subject\n";
    }

    $input = ucfirst(readline("Input the subject of your choice or (exit) to quit: "));

    if ($input === 'exit') {
        break;
    } elseif ($quiz_question[$input]) {
        echo "----- $input Quiz -----\n";

        foreach ($quiz_question[$input] as $number => $questions) {
            $total_question++;
            echo "Question{$number}: {$questions['question']}\n";
            $answer = readline("Input your answer: ");
            if (strtolower($answer) === strtolower($questions['answer'])) {
                $score++;
                echo "Correct\n";
            } else {
                $wrong_answer [] = [
                    'subject' => $input,
                    'question' => $questions['question'],
                    'useranswer' => $answer,
                    'correct_answer' => $questions['answer']
                ];
                echo "Wrong! The correct answer is '{$questions['answer']}'\n";
            }
        }

        $coutinue = ucfirst(readline("Do you want to try another subject? (Yes/No): "));
        if ($coutinue !== 'Yes') {
            break;
        }
    }
}

echo "----- RESULT -----\n";
echo "Total Question: {$total_question}\n";
echo "Your Score: {$score}\n";
$pencentage = $score/$total_question * 100;
echo "Percentage: " . round($pencentage) . "%\n"; 

if ($wrong_answer) {
    echo "Incorrect Answer!\n";
    foreach ($wrong_answer as $key => $value) {
        echo ($key+1). "Subject: {$value['subject']}\n";
        echo "Failed question: {$value['question']}\n";
        echo "Your answer: {$value['useranswer']}";
        echo "Correct answer: {$value['correct_answer']}\n";
    }
}
?>