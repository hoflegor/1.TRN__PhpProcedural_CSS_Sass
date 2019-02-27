<?php
//poniżej napisz funkcję
function showAndSum() {
    $tab = [];
    $sum = 0;
    foreach (range (1,5) as $key =>$v) {
        $tab[]=rand(0,9);
        $sum += $tab[$key];
    }
    echo implode(',', $tab) . "<br />";
    echo "Sum: " . $sum . "<hr />";
}
