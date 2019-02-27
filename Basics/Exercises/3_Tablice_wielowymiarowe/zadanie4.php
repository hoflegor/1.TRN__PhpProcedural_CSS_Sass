<?php
function generate2D($n) {
    $res = [];
    for ($i=0;$i<$n;$i++) {
        for($j=0;$j<$n;$j++) {
            $res[$i][$j] = mt_rand(-9,9);
        }
    }
    return $res;
}
function showSquare2D($tab) {
    for ($i=0;$i<count($tab);$i++) {
        for($j=0;$j<count($tab);$j++) {
            echo (($tab[$i][$j]<0) ? "":" ") . $tab[$i][$j] . " ";
        }
        echo "\n";
    }
}
function avgAbs($arr) {
    $total=0;
    for ($i=0;$i<count($arr);$i++) {
        for($j=0;$j<count($arr);$j++) {
            $total += $arr[$i][$j];
        }
    }
    $mean = $total/(count($arr)*count($arr));
    echo "Mean: " . $mean . "\n";
    for ($i=0;$i<count($arr);$i++) {
        for($j=0;$j<count($arr);$j++) {
            $arr[$i][$j] = abs( $arr[$i][$j] - $mean );
        }
    }
    return $arr;
}
$randMinusPlus = generate2D(2);
showSquare2D($randMinusPlus);
$newRandMinusPlus = avgAbs($randMinusPlus);
showSquare2D($newRandMinusPlus);
