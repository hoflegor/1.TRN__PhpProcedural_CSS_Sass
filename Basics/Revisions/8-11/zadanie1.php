<?php

$elIn='h2';

$countIn= 1;

$textIn='Cześć. Jestem dobrym, łagodnym tekstem. Pochodzę z małego, ubogiego słownika, położonego niedbale nieopodal "Raju utraconego". W młodości byłem wykorzystywany. Maltretowano mnie, wręcz rozdzierano na pojedyncze wyrazy a następnie wykorzystywano. Zgłosiłem się na policję. Stwierdzili, że jeśli robiono to dla zabawy, lub podczas gier, to wszystko odbyło się zgodnie z prawem i nic nie można zrobić... Niektóre wyrazy można wykorzystywać w grach. A ja jestem zbudowany właśnie z takich... Ach, ta genetyka! Ach, ta gramatyka! ';

echo "<a href='zadanie1.php?el=$elIn&count=$countIn&text=$textIn'>Wygeneruj tekst. Dobry tekst...<br></a>";


if(($_SERVER['REQUEST_METHOD']==='GET') && (isset($_GET['el'])) )  {


        $elHtml = $_GET['el'];


    if ( (isset($_GET['text'])) && (strlen($_GET['text']) > 0) ) {
        $textHtml = $_GET['text'];

        echo "<br>Wygenerowano:<br>" . "<$elHtml>$textHtml</$elHtml>";

    } else {

        echo "<br><$elHtml></$elHtml>--->Brak tekstu!!<br>";

    }

    if ( (!isset($_GET['count'])) or (is_int($_GET['count'])) or ($_GET['count'] < 0)){
        echo "--->Błędny paremetr count!!";
        }


}