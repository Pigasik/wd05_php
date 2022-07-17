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
