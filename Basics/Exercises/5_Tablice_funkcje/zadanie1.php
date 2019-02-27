<?php

function avg($array) {
    return array_sum($array) / count($array);
}

function arrayStat($array) {
    return [
        "min" => min($array),
        "max" => max($array),
        "avg" => avg(array_unique($array))
    ];
}
$arr = [9, 4, -3, 0, 2, 9, 2, 2, 9];
//echo "avg:" . avg($arr) . "\n";
print_r(arrayStat($arr));
