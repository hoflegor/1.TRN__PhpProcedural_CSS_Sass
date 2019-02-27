<?php
// tutaj umieść kod usuwający ciasteczko
//pamiętaj o sprawdzeniu czy ciasteczko istnieje i wyświetleniu odpowiedniego komunikatu jeśli nie

if (!isset($_COOKIE['User'])){
    echo "Ni ma ciacha takiego";
}
else{
    setcookie("User", "Daniel", time() - 3600);
}

//var_dump($_COOKIE['User']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 1</title>
</head>
<body>
<h1> Ciasteczko usunięte </h1>
</body>
</html>