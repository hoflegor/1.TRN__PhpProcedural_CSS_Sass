<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .vh-15 {
            margin-top: 15vh;
        }
    </style>
</head>
<body>

<div class="container vh-15">

    <a href="zadanie2_2.php" class="btn btn-block btn-danger">To Second</a>
    <hr>
    <p>Visited from address: <?php echo $_SERVER["HTTP_REFERER"] ?></p>
    <p>Visited from device: <?php echo $_SERVER["HTTP_USER_AGENT"]?></p>

    <hr>
    <pre>
    <?php print_r($_SERVER) ?>
    </pre>

</div>

</body>
</html>

<!-- screen https://s21.postimg.org/gty5yhgrr/Zrzut_ekranu_z_2017-04-12_00-18-44.png -->
