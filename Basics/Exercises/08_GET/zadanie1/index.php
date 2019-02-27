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
foreach (range(1,3) as $i){
    foreach (range(4,6) as $j) {
        echo "<a href='numbers.php?start=$i&end=$j'> Lit from $i to $j.</a><br />";
    }
}
//tutaj wygeneruj kilka linków
//możesz to zrobić z użyciem pętli
?>
</body>
</html>
