<?php

namespace App;

class Person {
    public $name ;
    function __construct($name)
    {
        return $this->name = $name;
    }
}