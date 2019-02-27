<?php
session_start();
$table=[];
if ($_SERVER["REQUEST_METHOD"]==="POST"){
    if (!isset($_POST["name"]) || strlen($_POST["name"])==0){
        echo "invalid form";
        return;
    }else {
        $table[] = $_POST["name"];
    }
    if (!isset($_POST["price"]) || (int)$_POST["price"] != $_POST["price"] ){
        echo "invalid form";
        return;
    }else {
        $table[] = $_POST["price"];
    }
    if (!isset($_POST["amount"]) || (int)$_POST["amount"] != $_POST["amount"] ){
        echo "invalid form";
        return;
    }else {
        $table[] = $_POST["amount"];
    }
//var_dump($table);
    $_SESSION["basket"][] = $table;
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
<a href=basket.php>To Basket</a>
<form action="index.php" name="basket" method = "POST">
    <input name='name' type='text' placeholder='name'> <br>product name
    <input name='price' type='number' placeholder='price'> <br>product price
    <input name='amount' type='number' placeholder='amount'> <br>amount of products

    <input type= "submit" value="send">
</form>
</body>
</html>