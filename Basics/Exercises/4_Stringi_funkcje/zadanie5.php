<?php
function checkLeapYear($string) {
    $parts = explode(" ",$string);
    $date = explode(".",$parts[0]);
    $time = explode(":",$parts[1]);
//    var_dump($date);

    if($date[2] % 4 == 0) {
        if($date[1] <= 10) {
            $date[1] += 2;
        } elseif ($date[1] == 11) {
            $date[1] += 1;
        }

    } else {
        if($time[2] <= 23) {
            $tmp = $time[2];
            $time[2] = $time[0];
            $time[0] = $tmp;
        } else {
            return false;
        }
    }

    return sprintf(
        "%'.02d.%'.02d.%'.04d %'.02d:%'.02d:%'.02d",
        $date[0],$date[1],$date[2],$time[0],$time[1],$time[2]
    );
}

$dateString = '03.05.2001 11:08:19';
echo checkLeapYear($dateString). "\n";
