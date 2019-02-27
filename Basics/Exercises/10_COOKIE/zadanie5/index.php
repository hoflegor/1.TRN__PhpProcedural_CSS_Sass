<?php
//tutaj napisz kod odbierający dane z formularza i aktualizujący lub dodający dane do ciasteczka
if ($_SERVER["REQUEST_METHOD"] === "POST") {
//  var_dump($_POST["input1"]);
//  var_dump($_POST["input5"]);
    $array=[$_POST["input1"],$_POST["input2"],$_POST["input3"],$_POST["input4"],$_POST["input5"]];
    setcookie("textArray",serialize($array));
//var_dump($_COOKIE);
    $unserializedCookie = unserialize($_COOKIE["textArray"]);
//print_r ($unserializedCookie);
    if(isset($_COOKIE["textArray"])==true){
        $message1=$unserializedCookie[0];
        $message2=$unserializedCookie[1];
        $message3=$unserializedCookie[2];
        $message4=$unserializedCookie[3];
        $message5=$unserializedCookie[4];
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
    <title>Zadanie 5</title>
</head>
<body>
<form action="index.php" method="POST" role="form">
    <input type="text" class="form-control" name="input1" id="text" placeholder="<?php echo $message1; ?>"> input 1<br><br>
    <input type="text" class="form-control" name="input2" id="text" placeholder="<?php echo $message2; ?>"> input 2 <br><br>
    <input type="text" class="form-control" name="input3" id="text" placeholder="<?php echo $message3; ?>"> input 3 <br><br>
    <input type="text" class="form-control" name="input4" id="text" placeholder="<?php echo $message4; ?>"> input 4 <br><br>
    <input type="text" class="form-control" name="input5" id="text" placeholder="<?php echo $message5; ?>"> input 5 <br><br>
    <input type="submit" value="Wyślij">
</form>
</body>
</html>