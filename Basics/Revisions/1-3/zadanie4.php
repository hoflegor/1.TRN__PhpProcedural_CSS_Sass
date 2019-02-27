<?php

$people = [
    'Tom' => [
        'weight' => 80,
        'height' => 172,
    ],

    'FatMan' => [
        'weight' => 180,
        'height' => 160,
    ],

    'Joshua' => [
        'weight' => 113,
        'height' => 198,

    ],

    'Kliczko' => [
        'weight' => 109,
        'height' => 198,
    ],
];

//print_r($people);

function calcBMI($weight, $height){

    $heightM=$height/100;

    $bmi=$weight/($heightM^2);

    return round ($bmi,2);
}

//echo calcBMI(80,172);

function peopleBMI($people){

    $bmiByPeople = [];

    foreach ($people as $key =>$human){
        $bmiByPeople [$key] = calcBMI($human['weight'], $human['height']);
    }

    return $bmiByPeople;
}

print_r(peopleBMI($people));
echo "<br>";
foreach ((peopleBMI($people)) as $key=>$value){
    echo "<br>BMI dla $key wynosi: $value.<br>";
}