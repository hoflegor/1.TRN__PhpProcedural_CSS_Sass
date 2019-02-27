<?php
// tutaj wczytaj zmienne z GET-a i przygotuj funkcję, która dokona obliczenia i ZWRÓCI dane

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if
    (isset($_GET['year'])
    &&
    isset($_GET['rand'])){
        $year=$_GET['year'];
        $rand=$_GET['rand'];

    }
}

function mixIt($year,$rand){
    $mixYear=$year + $rand;
    return $mixYear;
}

?>
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
// tutaj użyj wcześniej przygotowanej funkcji aby wyświetlić odpowiednie dane
echo mixIt($year,$rand);
?>
</body>
</html>