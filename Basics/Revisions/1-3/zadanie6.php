<?php
function calcTimeForDeposit($cash, $percent, $totalCash){

    $years = 0;

    while($cash<=$totalCash){
        $profit=($percent/100) * $cash;
        $cash+=$profit;
        $years++;
    }

    return $years;

}

echo "Wymagana ilość lat wynosi: " .
    calcTimeForDeposit(100,10,200) . ".";