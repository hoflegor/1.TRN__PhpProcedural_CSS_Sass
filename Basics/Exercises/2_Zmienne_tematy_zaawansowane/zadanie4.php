<?php

function remote($button, &$current) {
    static $currentVolume = 30;
    if (($button=="up" && $currentVolume>=33) or ($button=="down" && $currentVolume<=0)){
        return false;
    }
    elseif ($button != "up" && $button != "down") {
        echo "bad input ";
        return false;
    }
    elseif ($button=="up"){
        $currentVolume++;
        $current=$currentVolume;
        return true;
    }
    elseif ($button=="down") {
        $currentVolume--;
        $current=$currentVolume;
        return true;
    }
}
$isOk = remote("up", $current) ? "true" : "false";
echo "Volume: " . $current . "<br>";
var_dump($isOk);
//podgłaśnia, wypisuje aktualną głośność, sprawdza czy funkcja zwróciła "true" czy "false"
$isOk = remote("up", $current) ? "true" : "false";
echo "Volume: " . $current . "<br>";
$isOk = remote("up", $current) ? "true" : "false";
echo "Volume: " . $current . "<br>";
//podgłośniłam do maksymalnej głośności
$isOk = remote("up", $current) ? "true" : "false";
echo "Volume: " . $current . "<br>";
var_dump($isOk);
// tu wartość funkcji jest "false" bo nie da się przekroczyć maksymalnej głośności
$isOk = remote("down", $current) ? "true" : "false";
echo "Volume: " . $current . "<br>";
// sprawdziłam, czy również działa przyciszenie
$isOk = remote("pomyłka", $current) ? "true" : "false";
echo "Volume: " . $current . "<br>";
// sprawdzam komunikat gdy jest błąd wartości "button"

/* DANIELA
function remote ($button, &$current) {

    static $currentVolume = 30;

    if($button != "up" && $button !="down"){
        echo "Bad input";
        return false;
    }

    if(($currentVolume==33 and $button=="up") or ($currentVolume==0 and $button=="down"))
    {
        return false;
    };

    $currentVolume += ($button=="up") ? 1 : -1;
    $current = $currentVolume;
    return true;

}

remote ("up", $curr);
echo "Vol.: " .$curr . "<br />";
remote ("up", $curr);
echo "Vol.: " .$curr . "<br />";
remote ("up", $curr);
echo "Vol.: " .$curr . "<br />";
remote ("up", $curr);
echo "Vol.: " .$curr . "<br />";
remote ("up", $curr);
echo "Vol.: " .$curr . "<br />";
remote ("up", $curr);
echo "Vol.: " .$curr . "<br />";*/
