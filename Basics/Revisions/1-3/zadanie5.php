<?php

function deposit($cash,$percent,$years){

    $retTab = [
        'totalCash' => 0,
        'profit' => 0,
    ];

    $profit = 0;

    $totalCash = $cash;

    for ($i=0; $i<$years; $i++){

        $profit+=($percent/100) * $totalCash;
        $totalCash += $profit;

        $retTab ['totalCash'] = $totalCash;
        $retTab ['profit'] += $profit;

    }

    return $retTab;

}
echo '<pre>';
print_r(deposit(100,5,2));
echo '<pre>';