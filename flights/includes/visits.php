<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flights reservations</title>
</head>
<body>
<?php

if (!isset($_COOKIE['visits'])){

    echo "<h4>Witaj pierwszy raz na naszej stronie!!</h4>";

    setcookie('visits', 1 , strtotime("+ 1 year"));

}

else{

    $visits = $_COOKIE['visits'];

    echo ("<h4>Witaj, odwiedziłeś nas już $visits razy!!</h4>");

    setcookie('visits', $visits + 1, strtotime("+ 1 year"));


}

?>

</body>
</html>