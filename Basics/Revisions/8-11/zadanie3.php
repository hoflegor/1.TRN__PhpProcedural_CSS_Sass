<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="zadanie3.php" method="POST" role="form">
            <label>Office Name: <br>
                <input type="text" name="officeName" placeholder="Office Name">
            </label>
            <br>
            <br>
            <label>Rent Start: <br>
                <input type="text" name="rentStart" placeholder="RRRR-MM-DD">
            </label>
            <br>
            <br>
            <label>Rent time: <br>
                <input type="number" name="rentTime">
            </label>
            <br>
            <br>
            <label>Bonus: <br>
                <select name="bonus">
                    <option value="0">Select...</option>
                    <option value="10">10%</option>
                    <option value="35">35%</option>
                    <option value="49">49%</option>
                    <option value="75">75%</option>
                </select>
            </label>
            <br>
            <br>
            <input type="submit" value="Send">
        </form>
    </body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['officeName'])===true){

        $officeName=$_POST['officeName'];
        $dayCost=0;

        if(strlen($officeName)<5){
                $dayCost=390;
            }
        if( (strlen($officeName)>=5) && (strlen($officeName)<10) ){
                $dayCost=278;
            }
        if(strlen($officeName)>=10){
                $dayCost=150;
        }


    }

    if($_POST['bonus'] == 0) {
        $totalCost = $_POST['rentTime'] * $dayCost;
    }
    else{
        $totalCost = ($_POST['rentTime'] * $dayCost) - (($_POST['rentTime'] * $dayCost) * ($_POST['bonus']/100));
    }


//    var_dump($_POST['bonus']);

    echo "<hr>"."Całkowity koszt wynajmu to: " . round($totalCost,2)."zł";
}


    ?>



























