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
        $student = null;

        return $student;
    }

    public function create()
    {
        
    }

    public function update(int $id)
    {

    }

    public function delete(int $id)
    {

    }

    public function __destruct()
    {
        $this->connection->close();
    }
}