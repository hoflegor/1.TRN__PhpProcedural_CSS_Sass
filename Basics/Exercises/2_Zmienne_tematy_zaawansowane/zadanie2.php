<?php

$plnToUsd = 3.99;

function exchange($pln) {

    static $counter =0;
    $counter++;

    global $plnToUsd;
    $usd = $pln / $plnToUsd;


    echo "Wymiana nr $counter: Dotyczy $pln złotówek po kursie $plnToUsd da ". round($usd,2) . " dolarów <br>";
}

exchange (3);
exchange (6);
