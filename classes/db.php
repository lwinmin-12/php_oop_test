<?php

class db {

    public $conn,$tablename;

    function __construct($tablename)
    {
        $hostname = "localhost";
        $password = "Asdffdsa-4580";
        $database = "san_kyi_tr";
        $username = "lwinmin";
        $this->conn = mysqli_connect($hostname , $username , $password , $database);

        $this->tablename = $tablename;
    }
}