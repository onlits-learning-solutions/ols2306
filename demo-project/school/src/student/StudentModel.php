<?php

namespace school\src\student;

class Student
{
    private $connection = null;
    private $server = "localhost";
    private $username = "ols2306";
    private $password = "ols2306";
    private $database = "school_2306";

    public function __construct()
    {
        $this->connection = new \mysqli($this->server, $this->username, $this->password, $this->database);
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