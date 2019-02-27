<?php

function generate2D($n) {

    $res = [];

    for ($i=0; $i<$n ; $i++) {
        for ($j=0; $j<$n ; $j++) {
            $res[$i][$j] = mt_rand (0,9);
        }
    }

        return $res;

}

function showSquare2D($tab)
    {
        for ($i=0; $i < count($tab); $i++) {
            for($j=0; $j<count($tab); $j++){
                echo $tab[$i][$j] . " ";
            }
            echo "<br />";
    }
}
//print_r(generate2D(3));
showSquare2D(generate2D(4));
