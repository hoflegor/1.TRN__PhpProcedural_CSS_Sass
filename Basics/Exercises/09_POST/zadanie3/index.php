<?php
if($_SERVER["REQUEST_METHOD"]==="POST") {

    if(!isset($_POST["degrees"])) {
        echo "Form not valid";
        return;
    }

    $input = $_POST["degrees"];

    if(isset($_POST["conversionCF"])) {
        $result = $input * 1.8 + 32;
    } elseif (isset($_POST["conversionFC"])) {
        $result = ($input - 32 ) / 1.8;
    } else {
        echo "Form not valid";
        return;
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
    <title>Zadanie 3</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php
            if($_SERVER["REQUEST_METHOD"]==="POST") {
                echo $result;
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form action="index.php" method="post" role="form">
                <legend>Degrees Converter</legend>
                <div class="form-group">
                    <label for="text">Degrees</label>
                    <input type="number" class="form-control" min="0.00" step="0.01" name="degrees" id="degrees"
                           placeholder="Degrees...">
                </div>
                <button type="submit" class="btn btn-danger" name="conversionCF">Make some math! &#8451; to &#8457;</button>
                <button type="submit" class="btn btn-success" name="conversionFC">Make some math! &#8457; to &#8451;</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>