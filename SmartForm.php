<?php
//8.Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и 
// textarea после отправки. То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть. 
// Мало ли что-то пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует вводить заново. 
// Этого следует избегать.

class SmartForm extends Form
{
    protected $params=[];

    public function __construct()
    {
        $this->params = $_REQUEST;
    }
    public function input($name,$type="text",$value=''){
        if(isset($this->params[$name])){
            $value=$this->params[$name];
        }
        return parent::input($name,$type,$value);
    }

    public function _toString(){
        return json_encode($this->params);
    }
}