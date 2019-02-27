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
//wyświetl wyszystkie ciasteczka wraz z odpowiednimi linkamiech
var_dump($_COOKIE);
echo  $_COOKIE['number1']."<a href=cookieDel.php?name=numer1>Numer 1</a><br />";
echo  $_COOKIE['number2']."<a href=cookieDel.php?name=numer1>Numer 2</a><br />";
echo  $_COOKIE['number3']."<a href=cookieDel.php?name=numer1>Numer 3</a><br />";

?>
</body>
</html>
