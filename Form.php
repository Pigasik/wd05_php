<?php
//7. Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open, close. 
// Каждый метод принимает массив атрибутов.

class Form
{
    public function printHtml($arrayAtributes, $html) {

        foreach ($arrayAtributes as $key => $value) {
            $html .= " $key='$value'";
        }

        $html .= ">";
        
        return $html;
    }

    public function open($arrayAtributes) {
        $html = "<form";
        $html = $this->printHtml($arrayAtributes, $html);

        return $html;
    }

    public function input($arrayAtributes) {
        $html = "<input";
        $html = $this->printHtml($arrayAtributes, $html);
        
        return $html;
    }

    public function password($arrayAtributes) {
        $html = "<input type='password'";
        $html = $this->printHtml($arrayAtributes, $html);
        
        return $html;
    }

    public function submit($arrayAtributes) {
        $html = "<input type='submit'";
        $html = $this->printHtml($arrayAtributes, $html);
        
        return $html;
    }

    public function close() {
        return "</form>";
    }
}