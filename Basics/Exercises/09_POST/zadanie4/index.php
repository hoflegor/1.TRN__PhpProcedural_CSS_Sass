<?php
//tutaj umieść kod sprawdzający czy weszliśmy na stronę POST-em
//tutaj stwórz funkcję, która będzie dokonywała odpowiedniego przeliczenia i ZWRACAŁA dane
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = $_POST["amount"];
    $result=0;
//var_dump($_POST);
    if ($_POST["conversionType"] == "EURtoUSD"){
        $result = $number*1.06;
    }
    elseif ($_POST["conversionType"] == "USDtoEUR"){
        $result = $number/1.06;
    }
    elseif ($_POST["conversionType"] == "EURtoPLN"){
        $result = $number*4.25;
    }
    elseif ($_POST["conversionType"] == "PLNtoEUR"){
        $result = $number/4.25;
    }
    elseif ($_POST["conversionType"] == "USDtoPLN"){
        $result = $number*4.01;
    }
    elseif ($_POST["conversionType"] == "PLNtoUSD"){
        $result = $number/4.01;
    }
    //var_dump($result);
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
            //tutaj umieść kod wyświetlający przeliczone dane
            //pamiętaj aby sprawdzić czy dane zostały przesłane zanim je wyświetlisz
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                echo $result;
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form action="index.php" method="POST" role="form">
                <legend>Currency Converter</legend>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" min="0.00" step="0.01" name="amount" id="amount"
                           placeholder="Amount...">
                </div>
                <div class="form-group">
                    <label>Direction</label><br>
                    <label>
                        <input type="radio" name="conversionType" value="EURtoUSD" checked> EUR → USD
                    </label>
                    <hr>
                    <label>
                        <input type="radio" name="conversionType" value="USDtoEUR"> USD → EUR
                    </label>
                    <hr>
                    <label>
                        <input type="radio" name="conversionType" value="EURtoPLN"> EUR → PLN
                    </label>
                    <hr>
                    <label>
                        <input type="radio" name="conversionType" value="PLNtoEUR"> PLN → EUR
                    </label>
                    <hr>
                    <label>
                        <input type="radio" name="conversionType" value="USDtoPLN"> USD → PLN
                    </label>
                    <hr>
                    <label>
                        <input type="radio" name="conversionType" value="PLNtoUSD"> PLN → USD
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Money, money, money...</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>