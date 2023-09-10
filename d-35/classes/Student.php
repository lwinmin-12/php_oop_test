<?php

class Student {
    public $name , $gender , $birthYear , $namePrefix , $age;

    function __construct($inputName , $inputGender , $inputBirthYear)
    {
        $this->name = $inputName;
        $this->gender = $inputGender;
        $this->birthYear = $inputBirthYear;

        $this->namePrefix = $this->gender === "male" ? "Mr." : "Ms.";
        $this->age = date("Y") - $this->birthYear;

        
    }

    public function fullName () {
        return "{$this->namePrefix}{$this->name}";
    }

    public function intro () {
        return "My name is {$this->namePrefix}{$this->name} and age is {$this->age} year old";
    }

}