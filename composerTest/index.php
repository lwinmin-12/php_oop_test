<?php

use App\Person;
use chillerlan\QRCode\QRCode;
use Faker\Factory;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

require_once "./vendor/autoload.php";

system("clear");

$log = new Logger('name');
$log->pushHandler(new StreamHandler('logs/message.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
$log->error('hii');

$lmo = new Person('lmo');


print_r($lmo);

// $faker = Factory::create();

// echo $faker->phoneNumber();

// $qr = new QRCode();

// var_dump($qr->render('hello'));

// echo "<img src=".$qr->render("https://detfsmm.com")." />"