<?php

system("clear");

require_once "./autoload.php";

// $one = new One;

// print_r($one->a()->b()->c()->d());

// $users = new QueryBuilder("users");

// print_r($users->where("gender", "=" , "male")->orWhere("id" ,">" ," 4")->orWhere("age" ,">" ,"18")->orderBy("id")->orderBy("name" , "DESC")->sql());

$lmo = new Person;
$lmo->appearance = "chaw tal";

$lmo->setfbPasswoerd("moe may lin");

echo $lmo->getfbPassword();

// print_r($lmo ->canHack());