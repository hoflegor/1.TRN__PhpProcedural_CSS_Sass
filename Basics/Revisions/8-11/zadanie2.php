<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <form action="zadanie2.php" method="POST" role="form">
        <label> Wehikuł:<br>
            <select name="car">
                <option value="">Select...</option>
                <option value="M">Mazda</option>
                <option value="H">Hyundai</option>
                <option value="A">Audi</option>
                <option value="P">Porshe</option>
                <option value="L">Lexus</option>
            </select>
        </label>
        <br />
        <br />
        <label>Spalanie (100km):
            <br>
            <input type="number" name="fuelPer100" min="0" step="0.01">
        </label>
        <br />
        <br />
        <label>Cena paliwa:
            <br>
            <input type="number" name="pricePerFuel" min="0" step="0.01">
        </label>
        <br />
        <br />
        <label>Odległość:
            <br>
            <input type="number" name="distance" min="0">
        </label>
        <br>
        <br>
        <label>
            <input type="submit" value="Oblicz"></input>
        </label>
    </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if( (isset($_POST['car'])===true) && (isset($_POST['fuelPer100'])===true) && (isset($_POST['pricePerFuel'])===true) && (isset($_POST['distance'])===true) ) {
        $totalCost = ( ( ($_POST['pricePerFuel'])*($_POST['fuelPer100']) * (($_POST['distance'])/100) ) );

        echo "<hr>" . "Całkowity koszt podróży to ---> " . round($totalCost, 2) . "zł";

    }

    }




?>