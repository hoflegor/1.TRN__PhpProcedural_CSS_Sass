
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach(str_split($_POST["bin"]) as $key => $value){
        if($value != 0 && $value != 1){
            echo "wrong input";
        }
    }
    $newTable = array_reverse(str_split($_POST["bin"]));
    foreach($newTable as $key => $value){
        $newTable[$key] = $value * pow( 2,$key );
    }
    echo $_POST["bin"] . " to liczba " . array_sum($newTable);
}