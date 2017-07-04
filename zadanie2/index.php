<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Symulator Lotto</title>
</head>
<body>
<!-- Formularz losowania-->
<form action="index.php" method="post">
    <label>
        <h2>Wybierz 6 liczb z zakresu 1-49:</h2>
        <?php

        for ($i=1; $i<=49; $i++){
            echo "<input type='checkbox' name='num[]' value='$i'><$i|";
        }

        ?>
    </label>
    <br>
    <input type="submit" value="Losuj!!">
</form>
<br>

<?php
//Sprawdzanie metody i zmiennych
if ( ($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['num']))) {
//Sprawdzanie ilości elementów w tablicy
    if ((count($_POST['num'])) != 6) {
        echo "<strong>Wybrano nieprawidłową ilość cyfr!!</strong>";
    } //    Generowanie losowych liczb
    else {


        $draw = [];

        while ((count(array_unique($draw))) < 6) {
            $ran = random_int(1, 49);
            $draw[] = $ran;
        }

        sort($draw);
        $drawUnique = array_unique($draw);


        echo "<strong>Wybrane liczby to:</strong><br>";
        foreach ($_POST['num'] as $num) {
            echo "$num <br>";
        }

        echo "<br>";

        echo "<strong>Wylosowane liczby to:</strong><br>";
        foreach ($drawUnique as $num) {
            echo "$num <br>";
        }


//    Sprawdzenie trafień

        $counter = 0;

        $correct = [];

        foreach ($_POST['num'] as $checkNum) {
            foreach ($drawUnique as $num) {
                if ($checkNum == $num) {
                    $counter++;
                    $correct [] = $num;
                }
            }
        }

        echo "<br><strong>Liczba trafień: <ins>$counter</ins></strong>";

        if ($counter > 0) {

            echo "<br> Trafione liczby to: ";

            foreach ($correct as $val) {
                echo $val . " ";
            }
        }

    }
}

?>

</body>
</html>


