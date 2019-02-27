<?php
//Tutaj wczytaj dane przesłane POST i ustaw odpowiednie ciasteczko
setcookie("languageCookie", $_POST["language"]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 4</title>
</head>
<body>
<h1>Język został ustawiony</h1>
</body>
