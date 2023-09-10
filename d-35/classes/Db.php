<?php

class Db {
    public $conn , $tableName ;
    function __construct($tableName)
    {
        $hostname = "localhost";
        $username = "lwinmin";
        $password = "Asdffdsa-4580";
        $database = "san_kyi_tr";
        $this->conn = mysqli_connect($hostname , $username , $password , $database);

        $this->tableName = $tableName;
    }

    public function create(array $data)  {
        $sql = "INSERT INTO ".$this->tableName." ";

        $sql .= "(".join(',',array_keys($data)).") VALUES ";
        $sql .= "('".join("','",array_values($data))."')";

        mysqli_query($this->conn , $sql);
        return $this -> conn->insert_id;

    }

    public function readAll() {
        $sql = "SELECT * FROM $this->tableName";
        $query = mysqli_query($this->conn , $sql);

        $rows = [];
        while($row = mysqli_fetch_object($query)){
            $rows[] = $row;
        }
        return $rows;
    }

    public function getOne (int $id) : object {
        $sql = "SELECT * FROM $this->tableName WHERE id = $id";
        $query = mysqli_query($this->conn , $sql);
        $row = mysqli_fetch_object($query);
        return $row;
    }

    function __destruct()
    {
        mysqli_close($this->conn);
    }

}