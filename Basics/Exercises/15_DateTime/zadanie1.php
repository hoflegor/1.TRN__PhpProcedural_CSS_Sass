<?php
function dateDiff($date1, $date2) {


    $date1diff = new DateTime($date1);
    $date2diff = new DateTime($date2);

    $diff = $date1diff->diff($date2diff);

    echo $diff->y.' lat '.$diff->m.' miesięcy '.$diff->d.' dni / '.$diff->h.' godzin '.$diff->i.' minut '.$diff->s.' sekund '  ;
}
$date1 = '21.10.1987 00:00:00';
$date2 = '09.06.2017 00:00:00';
dateDiff($date1, $date2);