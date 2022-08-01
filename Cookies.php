<?php
// 9.Создайте класс Cookie - оболочку над работой с куками. Класс должен иметь следующие методы: установка куки set(имя куки, ее значение),
// получение куки get(имя куки), удаление куки del(имя куки).
class Cookie{

    public function setCookie($name, $text){
        setcookie($name, $text);
        }
    
    public function getCookie($name){
        return $_COOKIE[$name];
        }
    
    public function delCookie($name){
        setcookie($name, '',time());
        }
    }