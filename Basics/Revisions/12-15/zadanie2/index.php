<?php

require 'vendor/autoload.php';

use Mpociot\VatCalculator\VatCalculator;

function vat($country,$price){
    $vatCalculator = new VatCalculator();
    $grossPrice = $vatCalculator->calculate($price, "$country" );
    $tax   = $grossPrice - $price;
    $arr = [
        "netto" => $price,
        "brutto" => $grossPrice,
        "vat" => $tax
    ];
    return $arr;
}

print_r(vat("GB", 66));