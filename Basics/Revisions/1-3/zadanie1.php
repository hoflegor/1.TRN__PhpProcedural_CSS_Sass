<?php

$pesel = '87102109855';

function verifyPesel($pesel){

    $peselWeight = [1, 3, 7, 9, 1, 3, 7, 9, 1, 3];
    $peselSum = 0;

    for ($i = 0; $i < 10; $i++) {

        $peselSum += $pesel[$i] * $peselWeight[$i];
    }
        $m10 = 10-($peselSum % 10);

//        var_dump($m10);

        if(($m10 == $pesel[10]) || ($m10 == 0 && $pesel[10] == 0)){
            return true;
        }

        else{
            return false;
        }
}


var_dump(verifyPesel($pesel));
