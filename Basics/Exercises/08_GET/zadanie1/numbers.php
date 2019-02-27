<?php
// tutaj wczytaj zmienne z GET-a i przygotuj funkcję, która WYSWIETLI liczby
var_dump($_GET);

function valid($name) {

    return((!isset ($_GET['$name'])) ||
    ((int)$_GET['$name'] != $_GET[$name] )
    ) ? false : true;
}

if (!valid("start") || !valid("end")){
    echo "Invalid URL";
    // return false;
}

function renderList($a,$b){

    echo "<ul>";
    foreach (range($a,$b) as $num){
        echo "<li>". $num . "</li>";
    }
    echo"</ul>";
}

$start = $_GET['start'];

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
<?php
// tutaj użyj wcześniej przygotowanej funkcji
renderList($_GET["start"],$_GET["end"]);
?>
</body>
</html>
<!-- w przeglądarce dopisać /numbers.php?start=3&end=8 -->
