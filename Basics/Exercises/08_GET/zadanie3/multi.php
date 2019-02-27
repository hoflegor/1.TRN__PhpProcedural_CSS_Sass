<?php
$width = isset($_GET["width"]) ? $_GET["width"] : 5;
$height = isset($_GET["height"]) ? $_GET["height"] : 10;

function render($w,$h) {
    echo "<table>";
    for ($i=1;$i<=$h;$i++) {
        echo "<tr>";
        for ($j=1;$j<=$w;$j++) {
            echo "<td>" . $i*$j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

//<?php
//echo "<a href='multi.php?width=4&height=3'>4x3</a>";
//echo "<a href='multi.php?width=3&height=4'>3x4</a>";
//?>

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
<?php
render($width,$height);
?>
</body>
</html>