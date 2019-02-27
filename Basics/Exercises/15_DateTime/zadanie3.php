<?php

function dateInAsia($datesArray){

    foreach ($datesArray as $val){

        $asiaDate = new DateTime($val);

        $tz = new DateTimeZone('Asia/Hong_Kong');

        $asiaDate->setTimezone($tz);
        $newDate [] = $asiaDate->format('d.m.Y H:m:s');

    }

    return $newDate;

}

$datesArray_ex = ['18.02.2016 11:58:01', '19.03.1986 23:09:19', '01.09.2013 11:12:12', '05.04.1974 06:38:42', '31.05.2010 04:31:05'];

var_dump (dateInAsia($datesArray_ex));