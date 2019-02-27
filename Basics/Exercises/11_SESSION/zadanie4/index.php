
<?php
//tutaj zapisz kod sprawdzający czy formularz został wysłany
//oraz sprawdzający czy captcha jest poprawna
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['captcha']) && isset($_SESSION['captcha'])){
        var_dump($_POST['captcha']);
        var_dump($_SESSION['captcha']);
        echo $_POST['captcha'] == $_SESSION['captcha'] ? 'Nie jesteś robotem!' : 'Popracuj nad swoim A.I.!';  }
    else
    {
        echo 'Ups! something wrong! Please try again :)';
    }
}
//jeśli formularz nie został wysłany lub wynik jest błędny
//wygeneruj nową sumę i zapisz ją so sesji
$rand1 = rand(0,20);
$rand2 = rand(0,20);
$sum = $rand1 + $rand2;
$_SESSION['captcha'] = $sum;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 4</title>
</head>
<body>
<!--tutaj dodaj kod formularza html-->
<!--pamiętaj o dodaniu napisu z wynikiem do rozwiązania-->
<form action="index.php" method="POST">
    <input type="text" name="name" placeholder="Your name">
    <input type="text" name="surname" placeholder="Your surname">
    <input type="text" name="mail" placeholder="Your mail">
    <h4> Wpisz poniżej sumę <?php echo $rand1 .' + '. $rand2; ?> </h4>
    <input type="number" name="captcha">
    <input type="submit">
</form>

</body>
</html>