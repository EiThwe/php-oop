<?php

class Fruit {
    public static $x= 'x';
    public static $y= 'y';
    public static function z(){
        return "\nthis is z function";
    }

    public $name;
    public $color;
    // function __construct($x,$y)
    // {
    //     echo "I'm constructor--- $x---$y \n";
    // }
    public function detail(){
        return "this is $this->name with $this->color color\n";
    }
    // function __destruct()
    // {
    //     echo "I'm destructor\n";
    // }
};
?>