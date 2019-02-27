<?php

function triangleArea($a, $h, &$area){

    $area = $a * $h /2;

    echo "Pole trójkąt o boku $a i wysokości $h to $area <br>";
}

$area = 0;

triangleArea(3,6,$area);

echo "Teraz pole to: $area <br />";
