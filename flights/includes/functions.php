<?php

function airports(){

    require ('airports.php');

    foreach ($airports as $airport) {

        $code = $airport["code"];
        $name = $airport["name"];
        echo "<option value=$code>$name</option>";

    }

}

function tzByCode($code){

    require('airports.php');

    foreach ($airports as $airport) {
        foreach ($airport as $key => $value ){

            if ($value == $code){
                $tz =  $airport['timezone'];

            }
        }
    }
    return $tz;
}

