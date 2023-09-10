<?php   

//access modifier

class Person {
    public $skinColor;
    public $appearance;

    
    protected $money;
    protected $gfName;

    private $fbPassword =  "asdffdsa";
    private $gmail;

    public function getfbPassword () {
        return $this->fbPassword;
    }

    public function setfbPasswoerd ($newFbPassword) {
        return $this->fbPassword = $newFbPassword;
    }

    public function walk () {
        echo "can walk";
    }

    public function talk () {
        echo "can talk";
    }

    protected function tech () {
        echo "can tech";
    }

    private function canHack () {
        echo "can hack nasa ";
    }

}