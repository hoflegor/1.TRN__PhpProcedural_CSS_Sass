<?php

if (!isset($_COOKIE['visits'])){

    echo "<h4>Witaj pierwszy raz na naszej stronie!!</h4>";

    setcookie('visits', 1 , strtotime("+ 1 year"));


}


else{

    $visits = $_COOKIE['visits'] +1;

    echo ("<h4>Witaj, odwiedziłeś nas już $visits razy!!</h4>");

    setcookie('visits', $visits , strtotime("+ 1 year"));


}

//var_dump($visits);