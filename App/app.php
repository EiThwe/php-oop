<?php

require_once "../autoload.php";

// $student1 = new Student("Thwe Thwe","female","2000");
// $student2 = new Student("Mg Mg","male","2002");
// $student3 = new Student("KK","female","2001");

// print_r($student1);
// echo $student1->showFullName();
// echo $student1->introduction();
// print_r($student2);
// print_r($student3);

$user = new Db("users");
print_r($user->create([
    "name"=> "thwe thwe",
    "email"=>"tt@gmail.com",
    "gender" => "female",
    "address" => "br nyar"
]));
