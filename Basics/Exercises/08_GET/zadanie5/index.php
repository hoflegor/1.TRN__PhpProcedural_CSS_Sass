<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 5</title>
</head>
<body>
<?php
//tutaj wygeneruj kilka linków
//możesz to zrobić z użyciem pętli

for ($i=1980; $i<=2010; $i++){
    echo "<a href='birthYear.php?year=$i'
>$i</a><br>";
}

?>
</body>
</html>