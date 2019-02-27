<?php
if(!isset($_GET["page"])) {
    echo "Not isset";
    return false;
}

if((int)$_GET["page"] != $_GET["page"]) {
    echo "Not integer";
    return false;
}

function getDivisors($n) {
    $divisors = [1];

    for ($i=2;$i<=sqrt($n);$i++) {
        if($n % $i == 0) {
            $divisors[] = $i;
            $divisors[] = $n/$i;
        }

    }

    $divisors[] = $n;
    $divisors = array_unique($divisors);
    sort($divisors);
    return $divisors;
}

function renderList($array) {
    echo "<ul>";
    foreach ($array as $elem) {
        echo "<li>$elem</li>";
    }
    echo "</ul>";
}
?>
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
var_dump(getDivisors($_GET['page']));
renderList(getDivisors($_GET['page']));
?>
</body>
</html>