<?php

namespace school\src\student;

require '../env.php';

class Student
{
    private $connection = null;

    public function __construct()
    {
        $this->connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }

    public function index()
    {
        $sql = "SELECT * FROM student";
        $result = $this->connection->query($sql);
        if($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        
        return null;
    }

    public function details(int $id)
    {
        $sql = "SELECT * FROM student WHERE id=$id";
        $result = $this->connection->query($sql);
        if($result->num_rows > 0)
            return $result->fetch_assoc();
        
        return null;
    }

    public function create($student)
    {
        $first_name = $student['first_name'];
        $middle_name = $student['middle_name'];
        $last_name = $student['last_name'];
        $contact_no = $student['contact_no'];

        $sql = "INSERT INTO student(first_name, middle_name, last_name, contact_no) VALUES('$first_name', '$middle_name', '$last_name', '$contact_no')";
        $this->connection->query($sql);
        header("location:student.php");
    }

    public function update($student)
    {
        $id = $student['id'];
        $first_name = $student['first_name'];
        $middle_name = $student['middle_name'];
        $last_name = $student['last_name'];
        $contact_no = $student['contact_no'];

        $sql = "UPDATE student SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', contact_no='$contact_no' WHERE id=$id";
        $this->connection->query($sql);
        header('location:student.php');
    }

    public function delete(int $id)
    {

    }

    public function __destruct()
    {
        $this->connection->close();
    }
}