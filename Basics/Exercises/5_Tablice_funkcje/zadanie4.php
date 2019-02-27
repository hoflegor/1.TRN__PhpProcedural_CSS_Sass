<?php

function firstLast($array) {
    $i=0;
    while ($array) {
        if((++$i % 2)) {
            echo array_shift($array);
        } else {
            echo array_pop($array);
        }
        echo " - " . count($array) . " el.<br>";
    }
}
$arr = ['Programista', 'zna', 'tablicowe', 'funkcje', 'PHP'];
firstLast($arr);
