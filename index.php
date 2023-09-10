<?php
system('clear');

require_once "./autoload.php";

$student1 = new student('Moh Moh' , 'female' , '1990');
$student2 = new student('Aung Myint' , 'male' , '2001');

// var_dump($student1 , $student2);

 var_dump($student1->mySelf());