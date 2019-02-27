<?php
//tutaj umieść kod poberający wartość ciasteczka, jeśli istnieje
$lang = [
    'en' => 'Hello',
    'pl' => 'Cześć',
    'de' => 'Ehre',
    'es' => 'Hola',
    'fr' => 'Bienvenue',
];
if(!isset($_COOKIE["languageCookie"])) {
    echo "language cookie is not set";
} else {
    echo "Value is: " . $_COOKIE["languageCookie"] . "<br>";
}
echo $lang[$_COOKIE["languageCookie"]];
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
<!-- Tutaj umieść formularz do wybierania języka -->
<form method="POST" action="setLang.php">
    <select name="language">
        <option label="en">en</option>
        <option label="pl">pl</option>
        <option label="de">de</option>
        <option label="es">es</option>
        <option label="fr">fr</option>
    </select>

    <input type="submit" value="Wyślij">
</form>
<!-- Tutaj umieść informację powitalną w wybranym języku (jeżeli ciasteczko istnieje) -->

</body>
</html>