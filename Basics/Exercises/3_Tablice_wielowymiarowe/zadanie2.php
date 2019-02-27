<?php

function generate2D($n) {
    $res = [];
    for ($i=0;$i<$n;$i++) {
        for($j=0;$j<$n;$j++) {
            $res[$i][$j] = mt_rand(0,9);
        }
    }
    return $res;
}

function showSquare2D($tab) {
    for ($i=0;$i<count($tab);$i++) {
        for($j=0;$j<count($tab);$j++) {
            echo $tab[$i][$j] . " ";
        }
        echo "\n";
    }
}

function sumWithoutTrace(&$sum) {
    global $table;
    for ($i=0;$i<count($table);$i++) {
        for($j=0;$j<count($table);$j++) {
            $sum += ($i!=$j) ? $table[$i][$j] : 0;
        }
    }
}

$table = generate2D(3);
showSquare2D($table);
sumWithoutTrace($sum);
echo "Sum without trace : " .$sum . "\n";
