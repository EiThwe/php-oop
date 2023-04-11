<?php

class Animal{
    public $name;
    public $gender;
    public $lifespan= 100;
    function __construct($name,$gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
    public function walk(){
        return __CLASS__. " walk with 4 legs";
    }
}
class Bird extends Animal{
    public $lifespan= 5;
    public $canfly;
    function __construct($name,$gender,$canfly)
    {
        parent::__construct($name,$gender);
        $this->canfly = $canfly;
    }
    public function fly(){
        return __CLASS__." can fly";
    }
    public function walk()
    {
        print(parent::walk());
        echo "\n";
        return __CLASS__." walk with 2 legs";
    }
}
class Mammal extends Animal{
    public function feeding(){
        return __CLASS__." feed milk";
    }
}
system("cls");
$bird = new Bird("sparrow","male",true);
print_r($bird);
// $m = new Mammal;
// print_r($m->feeding());