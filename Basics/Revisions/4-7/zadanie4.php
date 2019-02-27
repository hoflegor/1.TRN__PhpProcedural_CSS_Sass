<?php
function countDomains($array){

    if(!is_array($array)){
        echo false;
    }
    else{

        $arrUrl = [];

        $domains=0;

        foreach ($array as $address){
           $first = (substr($address, 0, 7));
           $second= substr($address,11);
           $shortUrl= "$first" . "$second";

//           echo "<br>" . $shortUrl . "<br>";

           $arrUrl[]=$shortUrl;

           $urlUnique = array_unique($arrUrl);


        }

        echo "---> Unikalne domeny:";
        echo "<pre>";
        print_r($urlUnique);

        echo "<br>" . '---> Domeny na "g", o długości powyżej 3 znaków:' . "<br>";
        foreach ($urlUnique as $val){



                if((substr($val,7,1)=="g")&&(strlen($val)>=9)) {
                    echo "<br>" . $val ;
                    $domains++;
                }

        }



    }
    echo "<br>" . "---> Ilość domen: ". $domains . ".<br>";

//    return $domains;
}

$url=['http://www.domena.tld','http://www.mysweden.se','http://www.gmail.com','http://www.cnn.com','http://www.gmail.com','http://www.gmail.com','http://www.getery&swetery.com','http://www.gogo.com', 'http://www.gumtree.com', 'http://www.glupijajechlop.com', 'http://www.gigantycznastronkazmnostwemniepotrzebnychplikow.com'];

//print_r($url);

echo countDomains($url);