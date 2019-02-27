<?php
session_start();
var_dump($_SESSION);
if(!isset($_SESSION["counter"])){
echo "Session not assigned";
return;
}

$counter = $_SESSION["counter"]++;
var_dump($_SESSION);

//tutaj umieść kod pobierający dane z sesji
//pamiętaj o zwiększeniu wartości o 1
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 1</title>
</head>
<body>
<h1> Wartość wczytana z sesji to: <?php
    echo $counter;
    /* tutaj wyświetl wartość wczytaną z sesji */ ?> </h1>
</body>
</html>
