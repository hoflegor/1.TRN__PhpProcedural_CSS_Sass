<?php
function fillWithDots($array) {

    $max = 0;

    foreach ($array as $word) {
        $max = max($max,strlen($word));
    }

    echo "Max: ".$max."<hr>";

    foreach ($array as $word) {
        echo "<pre>" . $word . str_repeat(".",$max-strlen($word)) . "<br>";
    }

}

$wordArray = ['white', 'snow', 'is', 'falling', 'wow'];

fillWithDots($wordArray);
