<?php

require_once('includes/functions.php');

if (
    (($_SERVER['REQUEST_METHOD']) === 'POST') &&

    (isset($_POST['departure']) === true) &&
    (isset($_POST['arrival']) === true) &&
    ($_POST['arrival'] !== $_POST['departure']) &&

    (isset($_POST['startTime']) === true) &&
    (isset($_POST['flightLength']) === true) &&

    (isset($_POST['price']) === true) &&
    ($_POST['price'] > 0)
) {

    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];

    $startTime = $_POST['startTime'];
    $flightLength = $_POST['flightLength'];

    $price = $_POST['price'];

    $tzDep = new DateTimeZone (tzByCode($departure));

    $tzAr = new DateTimeZone(tzByCode($arrival));

    $startDT = new DateTime($startTime);
    $startDT -> setTimezone($tzDep);
    $startDate = $startDT->format('d.m.Y / G:i:s');
    echo ($startDate) . "<br>";

    $endDT = $startDT -> modify("+$flightLength hour");
    $endDT -> setTimezone($tzAr);
    $endDate = $endDT -> format('d.m.Y / G:i:s');
    echo ($endDate);
}
else{
    echo "<h2> Nie wprowadzono wszystkich danych i/lub wprowadzono błędne dane!!</h2>";
}
