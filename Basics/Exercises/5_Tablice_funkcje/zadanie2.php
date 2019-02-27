<?php
function cutAndWrite($array) {

    if(count($array)<4) {
        return false;
    }

    return implode("_",array_slice($array,1,3));

}

$arr = ["Ala", "ma", "kota"];
echo (cutAndWrite($arr)?:"False") . "<br>";
$arr = ["Ala", "ma","czarnego", "kota"];
echo (cutAndWrite($arr)?:"False") . "<br>";
