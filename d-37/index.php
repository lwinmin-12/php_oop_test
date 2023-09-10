<?php

system('clear');

class Animal{
    public $name ;
    public $gender;
    public $lifeSpan = 5;

    function __construct($name , $gender )
    {
        $this->name = $name;
        $this->gender = $gender;

    }

    public function walk () {
        return "walk with four legs";
    }

}

class Bird extends Animal {

    public $canfly;

    function __construct($name , $gender ,$canfly)
    {
        parent:: __construct($name , $gender);

        $this->canfly =$canfly;
    }

    public function fly () {
        return __CLASS__."can fly";
    }
}

class Mammal extends Animal {

    public function feeding () {
        
        return __CLASS__. "can feed milk";
    }
}


$m = new Bird('as ka lay' ,'male', true);

// print_r($m->feeding());
print_r($m);
