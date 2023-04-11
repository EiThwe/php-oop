<?php

class Student{
    public $name, $gender, $birthYear,$namePrefix,$age;
    function __construct($name,$gender,$birthYear)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->namePrefix = $this->gender === 'male' ? "Mr" : "Mrs";
        $this->age = date("Y") - $this->birthYear;
    }
    public function showFullName(){
        return $this->namePrefix ." ".$this->name."\n";
    }
    public function introduction(){
        return "My name is $this->name and I am $this->age year". ($this->age>1?"s" : "")." old";
    }
}