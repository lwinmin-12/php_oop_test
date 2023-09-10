<?php

system('clear');

interface A {
    public function a () ;
}

interface B {
    public function b () ;
}

interface C {
    public function c () ;
}

class D implements A,B,C {
    public function a () {

    }
    public function b (){

    }
    public function c (){

    }
}

$lmo = new D;

print_r($lmo);