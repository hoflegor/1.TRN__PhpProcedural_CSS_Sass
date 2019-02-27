<?php
function
rentCost($days){

  $config = [//dni, graniczne di to pot.2
    "0" => 200,
    "1" => 180,
    "2" => 160,
    "next" => 150,
    "discount" => 50

  ];

  $power = (int) log($days,2);

  $priceByDay = isset($config[$power]) ? $config[$power] : $config["next"];//Cena jednostkowa dnia

  $discount = ((int) ($days /7)) *$config["discount"];/*zniżka pełnych tyg* tygodni 8 zniżka*/

  return $days * $priceByDay - $discount;
}
echo "----------\n";
echo rentCost(70) . "\n";
echo "----------\n";
echo "<hr>";
echo rentCost(8) . "<hr>";   //1150
echo rentCost(3) . "<hr>";   //540
echo rentCost(15) . "<hr>";  //2150

