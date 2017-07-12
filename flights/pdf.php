<?php

require_once ('includes/functions.php');

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
    $depName=nameByCode($departure);

    $arrival = $_POST['arrival'];
    $arName = nameByCode($arrival);


    $startTime = $_POST['startTime'];
    $flightLength = $_POST['flightLength'];

    $price = $_POST['price'];

    $tzDep = new DateTimeZone (tzByCode($departure));

    $tzAr = new DateTimeZone(tzByCode($arrival));

    $startDT = new DateTime($startTime);
    $startDT -> setTimezone($tzDep);
    $startDate = $startDT->format('d.m.Y / G:i:s');
//    var_dump ($startDate) . "<br>";

    $endDT = $startDT -> modify("+$flightLength hour");
    $endDT -> setTimezone($tzAr);
    $endDate = $endDT -> format('d.m.Y / G:i:s');
//    var_dump ($endDate);
//TODO style do style.css
//    TODO echo tabeli, inna metoda
//    TODO zadanie 6
    echo "
        <style>
        th, td {
            border: 1px solid black;
            padding: 10px 15px;
        }
    </style>
    <table>
        <tr>
            <th>Lotnisko wylotu (kod lotniska)</th>
            <td> $depName ($departure)</td>
        </tr>
        <tr>
            <th>Lotnisko przylotu (kod lotniska)</th>
            <td> $arName ($arrival)</td>
        </tr>
        <tr>
            <th>Czas lotu</th>
            <td>$flightLength h</td>
        </tr>
        <tr>
            <th>Cena lotu</th>
            <td>$price</td>
        </tr>
    </table>
    ";

}
else{
    echo "<h2> Nie wprowadzono wszystkich danych i/lub wprowadzono błędne dane!!</h2>";
}