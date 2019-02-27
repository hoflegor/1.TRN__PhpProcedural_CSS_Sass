<?php

function convertDate($date, $days, $hours, $minutes, $seconds) {
    $date1 = new DateTime($date);
    $newDateString = $days . ' day ' . $hours . ' hour ' . $minutes . ' minute ' . $seconds . ' second ';
    var_dump($newDateString);
//    var_dump($newDateString);
    $newDate = $date1->modify($newDateString);
    return $newDate;
}
$date = '01.01.1977 12:00:00';
//var_dump(convertDate($date, 3, 1, 0, 15));
//zwróci 22.10.2016 16:14:39
print_r(convertDate($date, -4, -2, 9, 15));
//zwróci 15.10.2016 13:23:39