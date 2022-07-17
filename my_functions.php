<?php

    function debug($var){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }

    function sum(int $a,  int $b, int $c): int
    {
        return  $a + $c;
    }

    function shortText($content): string
    {
        $shortText = strip_tags($content);
        $shortText = trim($shortText);
        $shortText = mb_substr($shortText, 0,150);
        $pos = mb_strrpos($shortText, ' ');
        if ($pos !== false){
            $shortText = mb_substr($shortText, 0, $pos);
        }

        $shortText .= " ...";
        return $shortText;
    }

    function rest($array, $int){
        foreach ($array as $key => $value){
            $array[$key] = $value * $int;
        }
        return $array;
    }
    
// 1. Написать функцию, которая возводит число в указанную степень

    function power($number, $exponent){
        $num = 1;
        for($i = 1; $i <= $exponent; $i++)
            {
            $num=$num*$number;  // Умножаем число num на число $number $exponent раз
            }
        return $num;
        }

        echo power(2,1);

// 2. Написать функцию, которая проверяет, являются ли все буквы в строке строчными

    function lower($word){
        if(strtolower($word) != $word){
            echo 'В строке присутствуют заглавные буквы';
        } else {
            echo 'Все буквы в строке строчные';
        }
    }
    echo lower('ABCdd');

// 3. Написать функцию, которая генерирует массив указанной длинны со случайными значениями

    function create_array($length){
        $new_arr = [];
        for ($i = 0; $i < $length; $i++){
            $new_arr[$i] =rand(0,10);
        }
        echo "<pre>";
        print_r($new_arr);
        echo "<pre>";
        }
    
        create_array(3);

// 4. ф-ция, которая по номеру дня возвращает его название

    function days_of_the_weeks($a){
        switch ($a) {
            case 1:{
                echo "Monday";
                break;
            }
            case 2:{
                echo "Tuesday";
                break;
            }
            case 3:{
                echo "Wednesday";
                break;
            }
            case 4:{
                echo "Thursday";
                break;
            }
            case 5:{
                echo "Friday";
                break;
            }
            case 6:{
                echo "Saturday";
                break;
            }
            case 7:{
                echo "Sunday";
                break;
            }
            default:{
                echo "Only 7 days per week";
            }
        }
    }

days_of_the_weeks(4);

// 5. Написать функцию которая выводит n-ое число Фибоначчи

    function fibo($num){
        if ($num < 1) { 
            return false; 
        }
        if ($num <= 2) { 
            return ($num - 1);
        }
    
        $pre_pre = 0; 
        $current = 1; 
        for ($i = 3; $i <= $num; $i++) {
            $pre = $current; 
            $current = $pre + $pre_pre; 
            $pre_pre = $pre; 
        }
        return $current; 
    }

$n = 10;
echo fibo($n); // 0,1,1,2,3,5,8,13,21,34.... - получается 34