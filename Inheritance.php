<?php
class A {
    public $a = "a";
}

class B extends A {
    public $b = "b";
}

class C extends B {
    public $c = "c";
}

$c = new C;
var_dump($c);