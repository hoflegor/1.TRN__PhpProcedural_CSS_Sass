<?php

function evenBigOddSmall($string){
    $spaces = 0;
    for ($i=0; $i <strlen($string) ; $i++) {
        if($string[$i] == " "){
            $string[$i] = "_";
            $spaces++;
        }

        $string[$i] = call_user_func(
            $spaces % 2 ? 'strtoupper' :'strtolower',
            $string[$i]
        );

    }
    return $string;
}

echo evenBigOddSmall("Nice to be great developer") . "<br>";
