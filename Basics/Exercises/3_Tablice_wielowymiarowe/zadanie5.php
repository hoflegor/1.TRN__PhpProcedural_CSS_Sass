<?php
//    Napisz funkcję untilOdd(), w której za pomocą funkcji z zadania 1 będziesz generować tablicę losowych liczb
//    Tablica ma być generowana dopóki suma jej liczb nie będzie nieparzysta
//    Musisz w tym celu użyć pętli while, w której sprawdzana musi być suma liczba w tablicy czy jest nieparzysta
//    Gdy wygenerowana tablica okaże się prawidłową funkcja ma ją zwrócić
//    Wypisz zwróconą tablicę z użyciem print_r() i sprawdź czy Twoja funkcja działa prawidłowo
function generate2D($n) {
    $res = [];
    for ($i=0;$i<$n;$i++) {
        for($j=0;$j<$n;$j++) {
            $res[$i][$j] = mt_rand(0,9);
        }
    }
    return $res;
}
function total2D($matrix) {
    $sum = 0;
    for ($i=0;$i<count($matrix);$i++) {
        for($j=0;$j<count($matrix);$j++) {
            $sum += $matrix[$i][$j];
        }
    }
    return $sum;
}
function showSquare2D($tab) {
    for ($i=0;$i<count($tab);$i++) {
        for($j=0;$j<count($tab);$j++) {
            echo $tab[$i][$j] . " ";
        }
        echo "\n";
    }
}
function untilOdd() {
    while (true) {
        $matrix = generate2D(2);
        if(total2D($matrix) % 2) {
            return $matrix;
        }
    }
}
showSquare2D(untilOdd());
