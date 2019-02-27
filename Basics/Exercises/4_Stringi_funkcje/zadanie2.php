<?php

function foundAndReplace($array){
    $pos=[];
    foreach ($array as $mail) {
        $pos[] = strpos($mail,"@");
        echo strstr($mail,"@",true) . "@gmail.com <br />";
    }
    return $pos;
}

$mailList = ['john.doe@interia.pl', 'mark.willow@wp.pl'];
print_r(foundAndReplace($mailList));
