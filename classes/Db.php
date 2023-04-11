<?php

class Db{
    public $conn,$tableName;
    function __construct($tableName)
    {
        $hostname = "localhost";
        $username ="tth";
        $password = "112233";
        $database = "san_kyi_tar";
        $this->conn = mysqli_connect($hostname,$username,$password,$database);
        $this->tableName = $tableName;
    }

    public function create(array $data){
        $values = "'".join("','",array_values($data))."'";
        $sql = "INSERT INTO ".$this->tableName." ";
        $sql .= "(".join(",",array_keys($data)).") VALUES";
        $sql .="($values)";
    }
}