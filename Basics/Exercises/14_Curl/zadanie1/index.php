<?php
$browsers = [
    "standard" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36",
    "mobile" => "Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30"
];
$c = curl_init();
curl_setopt($c, CURLOPT_URL, 'http://api.coderslab.pl/curl.php');
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_USERAGENT, $browsers["mobile"]);
$result = curl_exec($c);
if ($result) {
    $parameters = explode("#",$result);//wyświetli kod html
//    print_r($parameters);
    echo "IP:      " . $parameters[0]                          . "\n";
    echo "SUM:     " . array_sum(explode(",",$parameters[1])) . "\n";
    echo "Device:  " . str_replace(":","/",$parameters[2])    . "\n";
} else {
    echo 'There war terrible problems with downloading data: ' . curl_error($c);
}
curl_close($c);

