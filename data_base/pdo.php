<?php
system("clear");
$host = "localhost";
$username = "lwinmin";
$password = "Asdffdsa-4580";
$database = "san_kyi_tr";


// $con = new mysqli($host,$username,$password,$database);

$con = new PDO(
    "mysql:host=$host;dbname=$database",
    $username,
    $password
);

// $stmt = $con->prepare("INSERT INTO people (name , money) VALUES (:name , :money)");

// $stmt->bindParam(":name" , $name);
// $stmt->bindParam(":name" , $money);

// $name = "su su";
// $money = 400 ;

// $stmt-> execute();

// $sql =  "SELECT * FROM people";
// $query  = $con->query($sql);

// $users = $query->fetchAll(PDO :: FETCH_OBJ);

$sql =  "SELECT * FROM people WHERE id = 140";
$query  = $con->query($sql);

$users = $query->fetch(PDO :: FETCH_OBJ);

var_dump($users);