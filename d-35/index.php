<?php
system('clear');

// require_once './classes/Student.php';
// require_once './classes/One.php';
// require_once './classes/Two.php';

require_once './autoload.php';

// $studentOne = new Student('lmo' , 'male' , '1999');
// $student2 = new Student('moh' , 'female' , '2000');

// $student3 = new Student('aung myint' , 'female' , '2001');


// $one = new One();
// $two = new Two();

// // var_dump($studentOne , $student2 , $student3 );
// echo $studentOne->intro();
// var_dump($one);
// var_dump($two);


// $user = new Db("user");

// print_r($user->create([
//     "name" => "lwinmin",
//     "email" => "lmo@gmail.com",
//     "address" => "128 ,nay pyi taw"
// ]));


// print_r($user->readAll());

// print_r($user->getOne(2));

// $people = new Db("people");

// print_r($people -> create([
//     "name" => "Ko Tun",
//     "money" => "5001"
// ]));

// print_r($people -> create([
//     "name" => "Ko Tun1",
//     "money" => "5002"
// ]));
// print_r($people -> create([
//     "name" => "Ko Tun2",
//     "money" => "5003"
// ]));print_r($people -> create([
//     "name" => "Ko Tun3",
//     "money" => "5004"
// ]));

// print_r($people->getOne(132));

// if (file_exists("backup")) {
//     $backUp = new FileWrite("backup");
//     $backUp->fileDelete();
// } else {
//     echo "File does not exist.";
//     $backUp = new FileWrite("backup");


//     $backUp->fileWrite('moe may lin');
// }

$backUp = new FileWrite("backup");

$backUp->fileWrite('moe may lin');

// print_r(Three::$a);
// print_r(Three::c() );

