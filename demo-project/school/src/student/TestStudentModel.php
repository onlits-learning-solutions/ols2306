<?php

require 'StudentModel.php';

use school\src\student\Student;

$studentModel = new Student();
$students = $studentModel->index();
printf("%-5s%-20s%-20s%-20s\n", "ID", "First Name", "Middle Name", "Last Name");
foreach($students as $student) {
    printf("%-5d%-20s%-20s%-20s\n", $student['id'], $student['first_name'], $student['middle_name'], $student['last_name']);
}