<?php
//tutaj umieść kod sprawdzający czy weszliśmy na stronę POST-em
//tutaj stwórz funkcję, która będzie modyfikowała lub nie napis w zależności od przesłanych danych
if($_SERVER["REQUEST_METHOD"] === "POST"){
    // $text= " ";
    // $agreement = false;



    if (isset($_POST['text'])) {
        $text = $_POST['text'];
    }
        else{
            echo "Text not assigned" ;
            return;
    }

    if (isset($_POST['agreement'])) {
        $agreement= true;
    }
        else{
        $agreement= false;
    }

    $badWords = [
        "fuck","shit"
    ];


        function renderInput($text,$agreement,$badWords){
            if(!$agreement) {
                foreach ($badWords as $bad){
                    $text = str_replace($bad, str_repeat("*", strlen($bad)), $text);
                }
            }
            echo $text;
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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form action="index.php" method="POST" role="form">
                <legend>Censor</legend>
                <div class="form-group">
                    <label for="text">Text</label>
                    <input type="text" class="form-control" name="text" id="text" placeholder="Text...">
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="agreement" id="agreement">
                                Jestem świadomy konsekwencji
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Go go go!</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h1>
            <?php
            // tutaj umieść kod wyświetlający dane przesłane POST-em
            // pamiętaj aby sprawdzić czy dane zostały przesłane zanim je wyświetlisz
            if($_SERVER["REQUEST_METHOD"]=== "POST"){
                renderInput($text,$agreement,$badWords);
            }
            ?>
        </h1>
        </div>
    </div>
</div>
</body>
</html>
