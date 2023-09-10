<?php

system("clear");

$db = "db.sqlite";
$tableName = "users";

try{
    $con = new SQLite3($db);
}catch(Exception $e){
    print_r($e);
}

// $sql = "CREATE TABLE $tableName (id INTEGER PRIMARY KEY, name VARCHAR(30) , money FLOAT)";
// var_dump($con->exec($sql));

$sql = "INSERT INTO users (name , money) VALUES (:name , :money)";
$stmt = $con->prepare($sql);
$stmt->bindParam(":name" , $name);
$stmt->bindParam(":money" , $money);

$name = "susu";
$money = 12.34;

var_dump($stmt->execute());