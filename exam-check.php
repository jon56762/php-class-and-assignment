<?php
echo "2025 EXAMINATION RESULT\n";
$student = [
    'Success' => 'A1',
    'Emmanuel' => 'C3',
    'Kindrick' => 'B2'
];
//Delete
//unset($student['Success']);
//Read
//echo $student['Success'];
//update
//$student['Success'] = 'w3';
//$student['Success'] = null;

$name = readline("Name:");

if ($name == "") {
    echo "Please fill the input";
} else {
    echo $student["$name"];   
}
?>