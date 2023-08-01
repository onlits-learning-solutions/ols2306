<?php
require 'StudentModel.php';
use school\src\student\Student;

$studentob = new Student();
$students = $studentob->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middl Name</th>
            <th>Last Name</th>
        </tr>
        <?php foreach ($students as $student) { ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['first_name'] ?></td>
            <td><?= $student['middle_name'] ?></td>
            <td><?= $student['last_name'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>