<?php
// tutaj umieść kod sprawdzający czy weszliśmy na stronę POST-em i wczytujący odpowiednie dane do zmiennych.
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $name ="";
    $surname = "";

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
        else{
            echo "Name not assigned" ;
            return;
    }

    if($_SERVER["REQUEST_METHOD"] === "POST")

    if (isset($_POST['surname'])) {
        $name = $_POST['surname'];
    }
        else{
            echo "Surname not assigned" ;
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
    <title>Zadanie 1</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php
            //tutaj umieść kod wyświetlający dane przesłane POST-em
            //pamiętaj aby sprawdzić czy dane zostały przesłane zanim je wyświetlisz
                if($_SERVER["REQUEST_METHOD"] === "POST"){
                    echo "Witaj " . $name . " " . $surname;
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form action="index.php" method="POST" role="form">
                <legend>Name and surname</legend>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name...">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" name="surname" id="surname" placeholder="Surname...">
                </div>
                <button type="submit" class="btn btn-primary">Say Hello!</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
