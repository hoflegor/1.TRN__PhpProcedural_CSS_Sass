<?php

function max2($a, $b){
    return ( $a > $b ) ? $a : $b;
}

function max3($a, $b, $c){
    return max2($a, max2 ($b,$c));
}

echo max2(2,1) . "<hr>";
echo max3(4,2,3);
