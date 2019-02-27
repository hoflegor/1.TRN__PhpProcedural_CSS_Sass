<?php

function isPerfect ($n){
  $divisorSum = 1;
  $sqrt = sqrt($n);//sqrt=pierwiastkowanie

  for ($i=2; $i<$sqrt; $i++){
    if($n % $i == 0){
        $divisorSum += $i + $n/$i;
//        echo $i . "\n";
    }
  }

  $divisorSum += ($sqrt == (int) $sqrt && $n != 1) ? $sqrt : 0;

  return $divisorSum==$n;

}

echo (isPerfect(28) ? "true" : "false"). "\n";
