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
function isAllEven($array) {
    for ($i=0;$i<count($array);$i++) {
        for($j=0;$j<count($array);$j++) {
            if($array[$i][$j] % 2 == 1) {
                return false;
            }
        }
    }
    return true;
}
$array = generate2D(2);
showSquare2D($array);
echo "There is " . (isAllEven($array) ? "all event elements.\n" : "at least one odd element.\n");
