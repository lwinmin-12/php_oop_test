<?php

class student {
    public $name, $gender, $birthYear , $namePreFix , $age;


    function __construct($inputName , $inputGender , $inputBirthYear)
    {
        $this->name = $inputName;
        $this->gender = $inputGender;
        $this->birthYear = $inputBirthYear;

        $this->namePreFix =  $inputGender === 'male' ? "Mrs" : "Ms.";
        $this->age = date("Y") - $inputBirthYear;
    }

    function showFullName () {
        return $this->namePreFix . $this-> name;
    }

    function mySelf () {
        return "Hola my name is $this->name and I was $this->age year".($this->age > 1 ? 's' : '')." old";
    }
}