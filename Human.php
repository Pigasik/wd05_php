<?php

class Human {

    protected $age;
    protected $name;
    public $sex;

    public static $pensionAge = 60;
    public static function getPensionAge(){
        return self::$pensionAge;
    }

    const TOOTH = 32;
    
    public function __construct($age, $name, $sex){
        $this->age = $age;
        $this->name = $name;
        $this->sex = $sex;
    }
    
        public function sayHelloy(){
        
        return $this->name." ".$this->age." ".self::TOOTH;
    }

    public function getName(){
        return $this->name;
    }
    
    public function setName($name)
    {
        if(mb_strlen($name) < 3){
            return false;
        }
        $this->name = ucfirst($name);
        return true;
    }
}

