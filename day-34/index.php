<?php 

require_once "./classes/Fruit.php";


$fruitOne = new Fruit('hi' , 'hello');

$fruitOne->name = 'apple';
$fruitOne->age = 12;


// $ass = (Object) [
//     "name" => 'lmo',
//     'age' => 12
// ];

// var_dump($ass->name);


var_dump($fruitOne -> name , $fruitOne->age  );

echo  $fruitOne -> detail();

