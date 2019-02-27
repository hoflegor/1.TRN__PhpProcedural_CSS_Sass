<?php
function sherlock($el,$array,&$index) {
    $index = array_search($el,$array);

    if(!is_array($array)) {
        return false ;
    }
}
sherlock("B",["A","B","C"],$index);
echo "Index: " . $index . "\n";
