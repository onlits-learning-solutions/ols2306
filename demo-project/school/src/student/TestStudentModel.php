<?php

require 'StudentModel.php';

use school\src\student\Student;

//----------------- Testing index() --------------------
function test_index()
{
    $studentModel = new Student();
    $students = $studentModel->index();
    printf("%-5s%-20s%-20s%-20s\n", "ID", "First Name", "Middle Name", "Last Name");
    foreach ($students as $student) {
        printf("%-5d%-20s%-20s%-20s\n", $student['id'], $student['first_name'], $student['middle_name'], $student['last_name']);
    }
}

//------------------- Testing count_student() --------------------------
function test_count_student()
{
    $studentModel = new Student();
    $count = $studentModel->count_student();
    echo "There are $count[0] number of students.";
}


test_index();
echo "\n";
test_count_student();
echo "\n";