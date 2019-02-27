<?php


$books = ["Pan Tadeusz","Potop","Zakazany owoc"];
$books2 = ["69 twarzy Gray'a","Koran"];

function bookShow($list) {

    static $noOfShowedBooks = 0;
    $tempNoOfShowedBooks = count($list);

    foreach ($list as $key => $book) {
        $noOfShowedBooks ++;
        echo "Książka " . ($key+1) . " : " . $book . "<br>";
    }

    echo "W tym obiegu wyświetlono $tempNoOfShowedBooks , łącznie wyświetlono " .
        $noOfShowedBooks.
"<br><br>";
}
bookShow($books);
bookShow($books2);
