<?php

use NumberToWords\NumberToWords;

require_once('includes/functions.php');
require_once('vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//Sprawdzanie lotnisk
    if (isset($_POST['departure']) === true
        &&
        $_POST['departure'] === ''
    ) {
        echo "<h2>* Nie podano lotniska odlotu!!</h2>";
    }

    if (isset($_POST['arrival']) === true
        &&
        $_POST['arrival'] === ''
    ) {
        echo "<h2>* Nie podano lotniska przylotu!!</h2>";
    }

    if (isset($_POST['departure']) === true
        &&
        isset($_POST['arrival']) === true
        &&
        ($_POST['arrival'] != $_POST['departure'])
    ) {
        $departure = $_POST['departure'];
        $arrival = $_POST['arrival'];
    } elseif ($_POST['departure'] != ''
        && $_POST['arrival'] != ''
    ) {
        echo
        "<h2>* Lotniska wylotu i przylotu nie mogą być takie same!!</h2>";
    }
//sprawdznie daty
    if (isset($_POST['startTime']) === true
        &&
        $_POST['startTime'] === ''
    ) {
        echo "<h2>* Nie podano daty lotu!!</h2>";
    } elseif (isset($_POST['startTime']) === true) {
        $startTime = $_POST['startTime'];
    }
//sprawdzanie czasu lotu

    if (isset($_POST['flightLength']) === true
        &&
        ($_POST['flightLength'] == ''
            ||
            $_POST['flightLength'] === '0')
    ) {
        echo "<h2>* Nie podano daty i/lub godziny lotu!!";
    } elseif (isset($_POST['flightLength']) === true
        &&
        $_POST['flightLength'] > 0
    ) {
        $flightLength = $_POST['flightLength'];
    }

//sprawdzanie ceny
    if (isset($_POST['price']) === true
        &&
        $_POST['price'] > 0
    ) {
        $price = $_POST['price'];
    } else {
        echo "<h2>* Nie podano ceny lotu!!!</h2>";
    }

//    Sprawdzanie opcji
    if (!isset($_POST['option'])){
        echo "<h2>* Nie wybrano sposobu wygenerowania biletu!!</h2>";
    }
//    var_dump($_POST['option']);
}

///Wyświetlanie danych z formularza

if (isset($departure)
    &&
    isset($arrival)
    &&
    isset($startTime)
    &&
    isset($flightLength)
    &&
    isset($price)
) {
    $depName = nameByCode($departure);

    $arName = nameByCode($arrival);

    $tzDep = tzByCode($departure);
    $depLocal = new DateTimeZone (tzByCode($departure));

    $tzAr = tzByCode($arrival);
    $arLocal = new DateTimeZone (tzByCode($arrival));

    $startDT = new DateTime($startTime);
    $startDT->setTimezone($depLocal);
    $startDate = $startDT->format('d.m.Y / G:i:s');
//    var_dump ($startDate) . "<br>";

    $endDT = $startDT->modify("+$flightLength hour");
    $endDT->setTimezone($arLocal);
    $endDate = $endDT->format('d.m.Y / G:i:s');
//    var_dump($endDate);

//    Generowanie imienia i nazwiska pasażera przez bibliotekę faker
    $faker = Faker\Factory::create();
    $passanger = $faker->name;

//    Generowanie ceny lotu słownie przez bibliotekę number-to-words
    $numberToWords = new NumberToWords();
    $numberTransformer = $numberToWords->getNumberTransformer('pl');

    $priceExpld = explode(".", $price);
/*TODO w przypadku 0zł/0gr ((substr($priceExpld[0], -1) == '0') nie wczytywało zmiennej '0' więc zmieniłem kod na:
if ($priceExpld[0] == '0'){
        $priceFirstVal = 'zero złotych';
Takie rozwiązanie jest OK?

 */
    if ($priceExpld[0] == '0'){
        $priceFirstVal = 'zero złotych';
    } elseif($priceExpld[0] == '1') {
        $priceFirstVal = 'złoty';
    } elseif (substr($priceExpld[0], -1) == '2'
        || substr($priceExpld[0], -1) == '3'
        || substr($priceExpld[0], -1) == '4'
    ) {
        $priceFirstVal = 'złote';
    } else {
        $priceFirstVal = 'złotych';
    }

    if ($priceExpld[1] == '0'){
        $priceSecondVal = 'zero groszy';
    } elseif($priceExpld[1] == '1') {
        $priceSecondVal = 'grosz';
    } elseif (substr($priceExpld[1], -1) == '2'
        || substr($priceExpld[1], -1) == '3'
        || substr($priceExpld[1], -1) == '4'
    ) {
        $priceSecondVal = 'grosze';
    } else {
        $priceSecondVal = 'groszy';
    }

    $priceFirstPrt = $numberTransformer->toWords($priceExpld[0]) .
        " " . $priceFirstVal;
//    var_dump($priceFirstPrt);
    $priceSecondPrt = $numberTransformer->toWords($priceExpld[1]) .
        " " . $priceSecondVal;
//    var_dump($priceSecondPrt);

//TODO Czy poprawnie dodałem style.css w tabeli?
    $ticket = <<<EOL

<link rel='stylesheet' href='css/style.css'>
    <table>
        <tr>
            <th scope='col' 
            colspan='2'><h1><ins><em>Bilet lotniczy</em></ins></h1></th>
        </tr>
        <tr>
            <th id='halfWidth' scope='col'><ins>Lotnisko wylotu<br>(kod 
            lotniska):</ins></th>
            <th id='halfWidth' scope='col'><ins>Lotnisko przylotu<br>(kod 
            lotniska):</ins></th>
        </tr>
        <tr>
            <td id='halfWidth'><h1><em>$depName<br>
            ($departure)</em></h1></td>         
            <td id='halfWidth'><h1><em>$arName<br>
            ($arrival)</h1></td>
        </tr>
        <tr>
            <th id='halfWidth' scope='col'><ins>Data / godzina wylotu<br>
            (czas lokalny):</ins></th>
            <th id='halfWidth' scope='col'><ins>Data / godzina przylotu<br>
            (czas lokalny):</ins></th>
        </tr>
        <tr>
            <td id='halfWidth'>$startDate<br>($tzDep)</td>
            <td id='halfWidth'>$endDate<br>($tzAr)</td>
        </tr>
        <tr >
            <th scope='col' colspan='2'><ins>Czas lotu (w godzinach):<ins></ins></th>
        </tr>
        <tr>
            <td colspan='2'>$flightLength h</td>
        </tr>
        <tr>
            <th scope='col' colspan='2'><ins>Cena lotu (PLN):</ins></th>
        </tr>
        <tr>
            <td colspan='2'>$price PLN<br>
            (słownie: $priceFirstPrt $priceSecondPrt)</td>
        </tr>
        <tr>
            <th scope='col' colspan='2'><ins>Imię i nazwisko pasażera:</ins></th>
        </tr>
         <tr>
            <td colspan='2'>$passanger</td>
        </tr>
    </table>

EOL;




    $mpdf = new mPDF();

    if ($_POST['option'] === 'show') {
        $mpdf->WriteHTML($ticket);
        $mpdf->Output('ticket.pdf', 'I');
    }

    if ($_POST['option'] === 'download') {
        $mpdf->WriteHTML($ticket);
        $mpdf->Output('ticket.pdf', 'D');
    }

}
