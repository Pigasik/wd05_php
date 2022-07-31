<?php
//11. Реализуйте класс Flash, который будет использовать внутри себя класс Session из предыдущей задачи (именно использовать, 
// а не наследовать). Этот класс будет использоваться для сохранения сообщений в сессию и вывода их из сессии. Зачем это нужно: 
// такой класс часто используется для форм. Например на одной странице пользователь отправляет форму, мы сохраняем в сессию сообщение
// об успешной отправке, редиректим пользователя на другую страницу и там показываем сообщение из сессии. Класс должен иметь 
// да метода - setMessage, который сохраняет сообщение в сессию и getMessage, который получает сообщение из сессии.
  
    class Flash{
        private $flash;
        private $name;
        private $text;
        public function __construct($name,$text){
            $this->name=$name;
            $this->text=$text;
            $this->flash= new Session();
        }
        public function reductFlash(){
            $this->flash->createSession($this->name,$this->text);
        }
        public function vivodFlash(){
            return $this->flash->readSession($this->name);
        }
    }
