<?php
// tutaj umieść kod usuwający ciasteczko
//pamiętaj o sprawdzeniu czy ciasteczko istnieje i wyświetleniu odpowiedniego komunikatu jeśli nie

$name=$_GET["cookie"];
if(isset($_COOKIE[$name])){
    setcookie("$name","",0);
}
else{
    echo "no such cookie found";
}

?>
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
<h1> Ciasteczko usunięte </h1>
</body>
</html>
