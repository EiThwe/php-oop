<?php

require_once "./classes/Fruit.php";
require_once "./classes/Three.php";
require_once "./classes/One.php";
require_once "./classes/QueryBuilder.php";
require_once "./classes/Person.php";
// $fruit1 = new Fruit;
// $fruit1->name = "apple";
// $fruit1->color = "red";
// // var_dump($fruit1->name);
// // var_dump($fruit1->color);
// // var_dump($fruit1);

// echo $fruit1->detail();

// $fruit2 = new Fruit;
// $fruit2->name = "apple";
// $fruit2->color = "green";

// echo $fruit2->detail();
// print_r(Fruit::$x);
// print_r(Fruit::$y);
// print_r(Fruit::z());

// print_r(Three::$a);
// echo "\n";
// print_r(Three::b());
// echo "\n";
// print_r(Three::c());
// echo "\n";



// $one = new One;
// print_r($one->a()->b()->c()->d());

// $users = new QueryBuilder("users");
// print($users->where("gender","=","female")->where("age",">","18")->sql());
$me = new Person;
$me->setFbPassword("mingalarpar");
var_dump($me->getFbPassword());

