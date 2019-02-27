<?php
function checkBrowser() {
    $config = [
        "Chrome" => "Google Chrome",
        "Firefox" => "Mozilla Firefox",
        "Opera" => "Opera",
        "Safari" => "Safari",
    ];
    foreach ($config as $browser => $name) {
        if(strpos($_SERVER["HTTP_USER_AGENT"],$browser) !== false) {
            return $name;
        }
    }
}

var_dump($_SERVER["HTTP_USER_AGENT"]);
?>

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

        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo checkBrowser(); ?>
                    </div>
                </div>
            </div>
        </div>


    </div>

    </body>
</html>

<!-- screen: https://s4.postimg.org/7e8k6edfx/Zrzut_ekranu_z_2017-04-12_00-15-54.png -->
