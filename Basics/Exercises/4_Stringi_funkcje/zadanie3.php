<?php

function switchString($string){
    if(strlen($string)<5){
        return false;
    }
    $string = strrev ($string);

    return substr($string,0,5);

}

echo (switchString("1234")?:"False") . "<br />";
echo (switchString("123456")?:"False") . "<br />";
