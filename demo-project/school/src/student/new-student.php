<?php

use school\src\student\Student;

require 'StudentModel.php';

if(isset($_POST['submit'])) {
    $student = new Student();
    $student->create($_POST);
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
            <h1>New Student</h1>
            <form action="" method="post">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" required>
                <label for="middle_name">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name">
                <label for="contact_no">Contact Number</label>
                <input type="text" name="contact_no" id="contact_no" required minlength="10" maxlength="10">
                <button name="submit">Submit</button>
            </form>
        </main>
    </div>
</body>

</html>