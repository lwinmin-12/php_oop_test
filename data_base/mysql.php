<?php
system("clear");
$host = "localhost";
$username = "lwinmin";
$password = "Asdffdsa-4580";
$database = "san_kyi_tr";


$con = new mysqli($host,$username,$password,$database);

// system("clear");

// print_r($con);

// $sql =  "INSERT INTO `students` (`id`, `name`, `date_of_birth`, `gender`, `weight`, `money`, `is_active`, `nation`, `address`, `created_at`, `updated_at`) VALUES (NULL, 'lmo', '1994-07-18', 'male', '192', '100', '1', 'myanmar', 'mm naw', NULL, NULL);";

// print_r($con->query($sql));

// $sql = "UPDATE  students SET name = 'moh moh bf' WHERE id = 352";

// $sql = "SELECT * FROM students WHERE id = 352";

// $sql = "DELETE FROM students WHERE id = 352";
// $sql = "SELECT * FROM  students LIMIT 3";


// $query = $con->query($sql);

// var_dump($query->fetch_object());

// while ($row = $query -> fetch_object()){
//     print_r($row);
// }

$stmt = $con->prepare("INSERT INTO people (name , money) VALUES (?,?)");

$stmt->bind_param("si" , $name , $money);

$name = "moh moh";
$money = 200000;
$stmt ->execute();


print_r($con);