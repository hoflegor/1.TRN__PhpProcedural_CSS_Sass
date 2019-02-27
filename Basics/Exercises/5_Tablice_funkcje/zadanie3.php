<?php

$arr = [90, 'dog', 'sun', 'yellow', 15, 'sun', 1, 'dog', 'sun', 'sun', 9, 15];

function returnEven($array){

    $counted = array_count_values($array);

    $even = [];

    foreach ($counted as $key => $value) {
        if ($value % 2 == 0){
        $even[]=$key;
        }
    }
        return $even;
}

print_r(returnEven($arr));
