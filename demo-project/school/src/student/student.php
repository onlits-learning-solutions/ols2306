<?php
require 'StudentModel.php';

use school\src\student\Student;

$studentob = new Student();
$students = $studentob->index();

$count = $studentob->count_student();
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
            <?php require('../sidebar.php') ?>
        </aside>
        <main class="grid-2">
            <div class="card-grid">
                <div class="card bg-lightskyblue">
                    <div class="card-title">
                        <h3>Students</h3>
                    </div>
                    <div class="card-body">
                        <h2><?= $count[0] ?></h2>
                    </div>
                </div>
                <div class="card bg-lightgreen">
                    <div class="card-title">
                        <h3>Staffs</h3>
                    </div>
                    <div class="card-body">
                        <p>Card Body</p>
                    </div>
                </div>
            </div>
            <div>
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
                            <td><?= $student['contact_no'] ?></td>
                            <td><a href="edit-student.php?id=<?= $student['id'] ?>">Edit</a></td>
                            <td><a href="delete-student.php?id=<?= $student['id'] ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</body>

</html>