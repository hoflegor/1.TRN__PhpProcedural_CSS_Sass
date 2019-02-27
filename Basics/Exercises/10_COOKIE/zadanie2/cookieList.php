<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 2</title>
</head>
<body>
<?php
//Tutaj wyświetl listę wszystkich ciasteczek, ich nazwę i wartość
$keys= array_keys($_COOKIE);
foreach ($keys as $key){
    echo $key ."-" . $_COOKIE[$key];
}
?>
</body>
</html>