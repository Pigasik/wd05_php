<?php
//10. Создайте класс Session - оболочку над сессиями. Он должен иметь следующие методы: создать переменную сессии, получить переменную, 
//удалить переменную сессии, проверить наличие переменной сессии. Сессия должна стартовать (session_start) в методе __construct.
class Session{
    public $name;
    public $text;
    public function __construct(){
        session_start();
        }
    public function createSession(){
        $_SESSION[$this->name] = $this->text;
        }
    public function readSession(){
        return $_SESSION[$this->name];
        }
    public function delSession(){
        unset($_SESSION[$this->name]);
        }
    public function provSession(){
        if (isset($_SESSION[$this->name])){
        return 'est';
            }
        else {
            return 'net';
             }   
        }
    }
    