<?php
$student = readline("Fullname:");
$exam_number = readline("Exam Number:");
$gender = readline("Gender:");

if ($student == "" || $exam_number == "" || $gender == "") {
    echo "Please make sure you filled all input";
} elseif (!is_numeric($exam_number)) {
    echo "Incorrect Exam Number";
} else {
    if ($gender == "Male" || $gender == "Female" && $exam_number == "001001" || $exam_number == "001002" || $exam_number == "001003") {
        $grades = array(
            "Divine Okoro" => "F9",
            "Jonathan Success" => "B3",
            "Victory Sam" => "A1",
        );
        echo $grades["$student"];
    } else {
        echo "Incorrect Please try again:";
    }
}
?>