<?php
//tutaj dodaj kod przygotowujący dane do wyświetlenia
session_start();
//var_dump($_SESSION["basket"]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 3</title>
</head>
<body>
<?php
$sum = "0";
foreach ($_SESSION["basket"] as $key => $product){
    echo "Item: ".$product[0] ." Amount: ". $product[1] ." Price: ". $product[2]."<br>";
    $sum += ($product[1]*$product[2]);
}
echo "Total: " . $sum;
?>
</body>
</html>