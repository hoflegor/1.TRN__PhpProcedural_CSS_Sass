<?php

$totalSum= 0;

function addCalc($nr1,$nr2)
{

    $sum = $nr1 + $nr2;

    global $totalSum;

    $totalSum += $sum;

    return $sum;

}

addCalc(4,4);
echo $totalSum . "<br>";
addCalc(2,2);
echo $totalSum . "<br>";
addCalc(6,9);
echo $totalSum . "<br>";
addCalc(1,1);
echo $totalSum;


