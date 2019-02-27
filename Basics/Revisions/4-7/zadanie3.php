<?php
//by Nastka
//stworzyłam ręcznie tablicę
$thisWeeksTemps =[
    0 =>
        [
            "measurement" => 25.26,
            "date" => "01.03.17 06:30:24",
        ],
    1 =>
        [
            "measurement" => 26.37,
            "date" => "02.03.17 07:20:24",
        ],
    2 =>
        [
            "measurement" => 25.64,
            "date" => "03.03.17 06:25:24",
        ],
    3 =>
        [
            "measurement" => 30.29,
            "date" => "04.03.17 06:30:24",
        ],
    4 =>
        [
            "measurement" => 28.73,
            "date" => "05.03.17 06:30:24",
        ],
    5 =>
        [
            "measurement" => 26.58,
            "date" => "06.03.17 06:30:24",
        ],
    6 =>
        [
            "measurement" => 25.92,
            "date" => "07.03.17 06:30:24",
        ],
];
function temps($array){
    //funkcja przyjmuje tylko tablice
    if(is_array($array)==false){
        return 0;
    }
//ustawiam początkowe wartości zmiennych, które będę używać
    $tempsTable=[];
    $avgTemp = 0;
    $minTemp = 0;
    $maxTemp = 0;
//dostaję się do wartości wypisanych w tablicy
    foreach ($array as $key => $value){
        foreach ($value as $key => $value){
            //nadaję funkcji wartość false jeśli któryś pomiar jest pusty
            if ($key == "measurement" && $value == null){
                return 0;
            }
            //tworzę nową tabelę z samymi pomiarami temperatury
            elseif ($key == 'measurement'){
                $tempsTable[]=$value;
            }
        }
//obliczam wymagane wartości
        $avgTemp = array_sum($tempsTable) / count($tempsTable);
        $minTemp = min($tempsTable);
        $maxTemp = max($tempsTable);
    }
//funkcja zwróci tabelę
    $resultTable = [
        "avg" => $avgTemp,
        "maxTemp" => $maxTemp,
        "minTemp" => $minTemp,
        "ip" => $_SERVER['REMOTE_ADDR'],
    ];
    return $resultTable;
}
echo "<pre>";
print_r(temps($thisWeeksTemps));
echo "</pre>";