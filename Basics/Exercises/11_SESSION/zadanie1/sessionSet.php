<?php
//tutaj umieść ustawiający wartość początkową sesji
session_start();
var_dump($_SESSION);
$_SESSION['counter']=0;
var_dump($_SESSION);
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
<h1> Sesja ustawiona na początkową wartość </h1>
</body>
</html>
