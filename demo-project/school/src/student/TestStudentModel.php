<?php

require 'StudentModel.php';

use school\src\student\StudentModel;

$studentModel = new StudentModel();
echo $studentModel->index();
