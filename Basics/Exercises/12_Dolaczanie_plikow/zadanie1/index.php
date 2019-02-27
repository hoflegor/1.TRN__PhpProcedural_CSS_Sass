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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:20px;">
            <a href="index.php">Link do strony głównej</a><br>
            <a href="index.php?page=page1">Link do strony 1</a><br>
            <a href="index.php?page=page2">Link do strony 2</a><br>
            <a href="index.php?page=page3">Link do strony 3</a><br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:20px;">
            <?php
            var_dump($_GET);

            if(isset($_GET['page'])){
                $page =$_GET['page'];
                if($page != 'page1' && $page !='page2' && $page != 'page3'){
                    echo "Page not found";
                    return;
                }
                include('pages/' . $page . '.php');

            }
            //tutaj sprawdź czy parametr GET został przesłany i jeśli tak, dołącz plik odpowiedniej podstrony

            //poniższa podstrona dodawana jest domyślnie, ma być ona widoczna tylko jeśli nie przesłano nic w GET
            include('pages/main.php');
            ?>
        </div>
    </div>
</div>
</body>
</html>
