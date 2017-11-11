<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 1</title>
</head>
<body>

    <form action="index.php" method="post">
        <label><h2>Proszę o podanie imienia:</h2>
            <input type="text" name="imie" placeholder="-->Tu wpisz swoje imię...">
        </label>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        if (isset($_POST['imie'])){

            $imie=$_POST['imie'];

            echo "<h1>Cześć, $imie!</h1>";
        }

    }

    ?>

</body>
</html>