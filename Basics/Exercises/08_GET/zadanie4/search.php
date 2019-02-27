<?php
$products = [
    [
        'name'  => 'Asus Transformer',
        'price' => 2999.99,
    ],
    [
        'name'  => 'iPhone 6',
        'price' => 3499.18,
    ],
    [
        'name'  => 'Converse Sneakers',
        'price' => 125.00,
    ],
    [
        'name'  => 'LG OLED55B6P OLED TV',
        'price' => 6493.91,
    ],
    [
        'name'  => 'Samsung HT-J4100',
        'price' => 800.99,
    ],
    [
        'name'  => 'Alpine Swiss Dress Belt',
        'price' => 99.08,
    ],
    [
        'name'  => '60 Watt LED',
        'price' => 1.50,
    ],
    [
        'name'  => 'Arduino Nano',
        'price' => 3.26,
    ]
];
//for ($i=0;$i<=7;$i++) {
//    echo "<a href='search.php?id=$i'>Search $i</a><br>";
//}
if(!isset($_GET["id"])) {
    echo "Id not isset"; return;
}
$i = $_GET["id"];
if(!isset($products[$i])) {
    echo "Product not found";return;
}
function renderProduct($product) {
    echo $product["name"] . " - " . $product["price"];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 5</title>
</head>
<body>
<?php
renderProduct($products[$i]);
?>
</body>
</html>