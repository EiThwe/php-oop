<?php

class QueryBuilder{
    public $tableName,$where;

    function __construct($tableName){
        $this->tableName = $tableName;
        $this->where = [];
    }
    
    function where($columnName,$operator,$value){
        $this->where[] =" $columnName $operator $value"; 
        return $this;
    }
    function sql(){
        $sql = "SELECT * from ".$this->tableName;
        if(!empty($this->where)){
            $sql .= " WHERE".join(" AND ",$this->where);
        }
        $sql .= ";";
        return $sql;
    }
}