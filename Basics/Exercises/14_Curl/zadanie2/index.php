<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 2</title>
</head>
<body>
<?php
$c = curl_init();
curl_setopt($c, CURLOPT_URL, 'http://api.coderslab.pl/curlForm.php');
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2)
AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36');
//$result = curl_exec($c);
//if ($result==true) {
//ini_set("xdebug.var_display_max_children", -1);
//ini_set("xdebug.var_display_max_data", -1);
//ini_set("xdebug.var_display_max_depth", -1);
//var_dump($result);
curl_setopt($c, CURLOPT_POST, 1);
curl_setopt($c, CURLOPT_POSTFIELDS, [
    'name' => 'Nemo91',
    'surname'=> 'Em1991',
    'city'=> 'Warsaw',
    'courseType'=> 'be',
]);
$result = curl_exec($c);
if ($result==true) {
//echo $result;
    $id = explode(":",$result)[1];
    echo "ID REJESTRACJI: " . $id;
} else {
    echo 'Błąd: ' . curl_error($c);
}
curl_close($c);
?>
</body>
</html>