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

//tutaj wygeneruj 5 linków po odebraniu danych z GET
//możesz to zrobić z użyciem pętli

if ($_SERVER['REQUEST_METHOD']==='GET'){

    if (isset($_GET['year']) === true){
        for ($i=0; $i<5; $i++) {
            $year = $_GET['year'];
            $rand = random_int(-10, 10);
            echo "Year: $year<br>Random: $rand<br>";



            echo
            "<a href=mixBirthYear.php?year=$year&rand=$rand>Make
 mix!!<br><br></a>";
        }
    }

    else{
            echo "Błędne dane";
        }

}


?>
</body>
</html>