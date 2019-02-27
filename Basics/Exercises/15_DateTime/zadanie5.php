<?php

function nextDecade($date){

    $daysText = array('Pon', 'Wto', 'Śro', 'Czw', 'Pią', 'Sob', 'Nie');

    for($i=1; $i<=10; $i++){

        $checkDate = new DateTime($date);

        $nextDate=$checkDate->modify("+" . "$i" ." year");

        $days = ($nextDate->format('N'))-1;

        $dateForm= $nextDate->format('Y-m-d') .", " .
            $nextDate->format('z') . " dzień roku, " .
            $daysText[$days] ."<br>";

        print_r($dateForm);
    }

}

$date1 = '2016-03-01';
echo nextDecade($date1);

//'Y-m-d' .', ' . 'z' . ' dzień roku, ' . 'N'