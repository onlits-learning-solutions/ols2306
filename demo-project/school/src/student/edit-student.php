<?php

use school\src\student\Student;

require 'StudentModel.php';

if (isset($_POST['submit'])) {
} else {
    $studentob = new Student();
    $student = $studentob->details($_GET['id']);
    print_r($student);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Student</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <?php require('../sidebar.php') ?>
        </aside>
        <main>
            <h1>Edit Student</h1>
            <form action="" method="post">
                <label for="id">Id</label>
                <input type="text" name="id" id="id" readonly value="<?= $student['id'] ?>">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" <?= $student['first_name'] ?>>
                <label for="middle_name">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name">
                <button name="submit">Submit</button>
            </form>
        </main>
    </div>
</body>

</html>