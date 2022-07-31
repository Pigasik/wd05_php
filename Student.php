<?php

class Student extends Human{
    
    public function sayAnswer(){
        return "I don't know";
    }

    public function sayHelloy(){
        return $this->name." ".$this->age."Проверка!";
    }
}

