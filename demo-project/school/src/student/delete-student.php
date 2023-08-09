<?php

use school\src\student\Student;

require 'StudentModel.php';

$id = $_GET['id'];
$studentob = new Student();
$studentob->delete($id);
header("location:student.php");