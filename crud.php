<?php

$students = [];

while (true) {
    echo "----- SCHOOL MANAGEMENT SYSTEM -----\n";
    echo "1. Add Student\n";
    echo "2. View All Students\n";
    echo "3. Search Student\n";
    echo "4. Delete Student\n";
    echo "5. Exit\n";

    $input = readline("Select any you want: ");

    switch ($input) {
        case 1 :
            $student_name = readline("Input Student name: ");
            $student_age = readline("Input Student age: ");
            $students[] = ['name' => $student_name, 'age' => $student_age];
            echo "Student added!\n";
            break;
        
        case 2 :
            echo "--------- All Student ----------\n";
            foreach ($students as $record => $student) {
                echo ($record+1) . "{$student['name']}, {$student['age']}\n";
            }
            break;
        case 3:
            $search = readline("Enter student name: ");
            $found = false;
            foreach ($students as $student) {
                if (strtolower($student['name'] === strtolower($search))) {
                    echo "Found: {$student['name']}, {$student['age']}\n";
                    $found = true;
                } else {
                    echo "Not Found\n";
                }
            }
            break;
        case 4:
            $delete = readline("Enter student name: ");
            $deleted = false;

            $deletedstudent =[];
            foreach ($students as $user) {
                if (strtolower($user['name']) !== strtolower($delete)) {
                    $deletedstudent[] = $user;
                }else {
                    $deleted = true;
                }
            }
            if ($deleted) {
                $students = $deletedstudent;
                echo "$delete Successfully\n";
            }
            break;    
        case 5:
            echo "Goodbye";
            exit;            
        default:
            echo "Invalid!!";
            exit;
    }
}