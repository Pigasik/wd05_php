<?php

class Worker{
    public $name;
    public $age;
    public $salaly;

    public function __construct ($name, $age, $salaly){
        $this->age = $age;
        $this->name = $name;
        $this->salaly = $salaly;
    }
}