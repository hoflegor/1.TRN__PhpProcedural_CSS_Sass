<?php
//tutaj umieść kod sprawdzający czy weszliśmy na stronę POST-em
//dodaj kod który będzie dodawał ciasteczko w przypadku wysłania formularza
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name= $_POST["name"];
    $value= $_POST["value"];
    $time = $_POST["expireHours"];
    setcookie($name,$value,time()+3600*$time);
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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php
            //tutaj wyświetl link do drugiej strony, wyświetlającej wszystkie ciasteczka
            echo "<a href='cookieList.php'>To Cookie List</a>"
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form action="index.php" method="POST" role="form">
                <legend>Cookie add</legend>
                <div class="form-group">
                    <label for="name">Cookie name</label>
                    <input type="text" class="form-control" name="name" id="name"
                           placeholder="Cookie name...">
                </div>
                <div class="form-group">
                    <label for="value">Cookie value</label>
                    <input type="text" class="form-control" name="value" id="value"
                           placeholder="Cookie value...">
                </div>
                <div class="form-group">
                    <label for="expireHours">Expire hours</label>
                    <select name="expireHours" id="expireHours" class="form-control">
                        <option value=""> -- Select One --</option>
                        <?php
                        for ($a = 0; $a <= 72; $a = $a + 8) {
                            echo '<option value="' . $a . '">' . $a . 'h</option>';
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">Bake...</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>