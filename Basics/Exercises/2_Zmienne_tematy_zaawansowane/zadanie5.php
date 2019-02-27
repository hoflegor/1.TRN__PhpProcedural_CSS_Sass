<?php


$totalPrice = 0;

function basket($name,$price,$quantity) {

    global $totalPrice;
    $totalPrice += $price * $quantity;
    echo $name . " : " . ($price*$quantity) . "<br>";

}


basket("Smartfon",500,2);
basket("Szpilki",4000,1);
basket("Naszyjnik",50000,1);
basket("Jacht",10000000,1);
echo "Total: " . $totalPrice . "<br>";
