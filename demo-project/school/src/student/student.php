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
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <?php require('../sidebar.php')?>
        </aside>
        <main>
            <a href="new-student.php">New Student</a>
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Contact Number</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($students as $student) { ?>
                    <tr>
                        <td><?= $student['id'] ?></td>
                        <td><?= $student['first_name'] ?></td>
                        <td><?= $student['middle_name'] ?></td>
                        <td><?= $student['last_name'] ?></td>
                        <td><?= $student['contact_no']?></td>
                        <td><a href="edit-student.php?id=<?= $student['id'] ?>">Edit</a></td>
                        <td><a href="">Delete</a></td>
                    </tr>
                <?php } ?>
            </table>
        </main>
    </div>
</body>

</html>