<?php

class Fruit {
    public $name;
    public $age;

    function __destruct()
    {
        // echo "deeeeee dtruction \n";
    }

    function __construct($x , $y)
    {
        echo "that fuction construct $x and $y \n";
    }

    public function detail () {
        echo 'i am function';
        return "dee tail";
    }
}