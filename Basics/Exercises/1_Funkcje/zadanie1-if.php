<?phP
function rentCost($days){

  $config = [//dni, graniczne dni to pot.2
    "0" => 200,
    "1" => 180,
    "2" => 160,
    "next" => 150,
    "discount" => 50

  ];

  if($days<=1) {
    $priceByDay = $config[0];
  }
  elseif ($days <= 3){
    $priceByDay = $config[1];
  }
  elseif ($days <= 3){
    $priceByDay = $config[2];
  }
  else {
    $priceByDay = $config["next"];
  }

  $discount = ((int) ($days /7)) * $config["discount"];/*zniżka pełnych tyg* dni 8 zniżka*/

  return $days * $priceByDay - $discount;
}
echo "----------\n";
echo rentCost(70) . "\n";
echo "----------\n";
echo "<hr>";
echo rentCost(8) . "<hr>";   //1150
echo rentCost(3) . "<hr>";   //540
echo rentCost(15) . "<hr>";  //2150
