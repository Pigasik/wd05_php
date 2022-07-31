<?php

class Animal{
    public $name;
    public $legs;

    public function __construct($name, $legs){
        $this->name = $name;
        $this->legs = $legs;
    }

    public function sayHelloy(){
        if ($this->legs == 0){
            return "boool";
        } else {
            return 'Woof';
        }
    }
}