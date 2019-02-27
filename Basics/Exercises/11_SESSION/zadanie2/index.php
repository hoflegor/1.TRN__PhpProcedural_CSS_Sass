<?php
session_start();

//phpinfo();

$lectures = [
    "math",
    "physics",
    "english"
];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($lectures as $lecture) {
        if(!isset($_POST[$lecture])) {
            echo "Invalid form";
            return;
        }
        if($_POST[$lecture] >= 1 && $_POST[$lecture] <= 6) {
            $_SESSION[$lecture] = $_POST[$lecture];
        }
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 2</title>
</head>
<body>

<?php
echo "<ul>";

$mean = 0;
$counter = 0;
$total = 0;

foreach ($lectures as $lecture) {
    if(isset($_SESSION[$lecture])) {
        echo "<li>$lecture ---> $_SESSION[$lecture]</li>";
        $counter++;
        $total += $_SESSION[$lecture];
    }
}
echo "</ul>";
if($counter != 0) {
    $mean = $total / $counter;
    echo "<h3>Mean: $mean</h3>";
}
?>

<form action="index.php" method="post">
    <?php
    foreach ($lectures as $lecture) {
        echo $lecture . "<br>";
        echo "<input required 
                name='$lecture' 
                type='number' 
                min='1' 
                max='6' 
                placeholder='Grade from $lecture' ";
        if(isset($_SESSION[$lecture])) {
            echo "value='$_SESSION[$lecture]'";
        }
        echo "><br>";
    }
    ?>
    <hr>
    <input type="submit" value="Send">
</form>

</body>
</html>