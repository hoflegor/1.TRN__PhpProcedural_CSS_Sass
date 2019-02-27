<?php

function convertToCoins($money) {
    $config = [10, 5, 2, 1];

    foreach ($config as $nom) {
        $amountOfCoins = (int) ($money/$nom);
        $money -= $amountOfCoins * $nom;
        $result[$nom] = $amountOfCoins;

    }
  return $result;
}

var_dump(convertToCoins(188)) . "<hr>";
print_r(convertToCoins(188)) . "<hr>";
echo implode (",", convertToCoins(188));
