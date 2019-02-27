#  Zmienne - tematy zaawansowane

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

* Stwórz funkcję, która obliczy pole trójkąta `triangleArea($a, $height, &$area)`.
* Funkcja powinna przyjmować 2 standardowe argumenty: długość boku i wysokość
* Trzeci argument powinien być przekazany z użyciem referencji
* Po obliczeniu w funkcji pola wpisz do zmiennej ```$area``` wynik (zauważ że zmienna jest przekazana przez referencję)
* Następnie wypisz na stronie komunikat `Pole trójkąta o boku X i wysokości Y to Z`, używając do tego odpowiednich zmiennych

#### Zadanie 2 - rozwiązywane z wykładowcą

* Stwórz zmienną o nazwie `$plnToUsd` o wartości równej aktualnemu kursowi dolara.
* Następnie stwórz funkcję `exchange($val)`, która jako argument przyjmie TYLKO kwotę w złotówkach jaką chcemy wymienić na dolary
* Funkcja powinna w odpowiedni sposób w swoim ciele skorzystać ze zmiennej `$plnToUsd` aby wyliczyć otrzymaną ilość dolarów.
* W funkcji wypisz komunikat `Wymiana X złotówek po kursie Y da Z dolarów`
* Dodaj w funkcji zmienną statyczną, której zadanie będzie zliczenie ile wymian zostało już dokonanych
* Zmodyfikuj komunikat aby na jego początku dodany był napis `Wymiana nr 1` itd.
* Wywołaj funkcję kilka razy i sprawdź czy działa prawidłowo

-------------------------------------------------------------------------------

#### Zadanie 3

* Stwórz funkcję `bookShow($list)`, której argumentem będzie tablica tytułów książek (zwykła tablica z napisami)
* W funkcji dodaj zmienną statyczną `$noOfShowedBooks`, która będzie zliczać łączną ilość wyświetlonych książek
* Funkcja ma za zadanie przeiterować i wyświetlić tytuły książek, każdorazowo zwiększając licznik przetworzonych książek
* Pod koniec funkcja powinna wyświetlić informację: `W tym obiegu wyświetlono X książek, Łącznie wyświetlono Y książek`, gdzie X to liczba książek w tym uruchomieniu funkcji a Y to liczba wszyskich wyświetlonych książek.

#### Zadanie 4

* Stwórz funkcję `remote($button, &$current)`, która będzie symulowała prosty pilot do zmiany głośności
* Funkcja jako pierwszy argument przyjmuje napis (string) `up` lub `down`
* Stwórz w funkcji zmienną statyczną `$currentVolume` z wartością początkową `30`
* Gdy argument funkcji to `up`, wartość `$currentVolume` ma być zwiększona o `1` ale maksymalna wartość to `33`
* Gdy argument funkcji to `down`, wartość `$currentVolume` ma być zmniejszona o `1` ale minimalna wartość to `0`
* W przypadku przekroczenia wartości granicznych np. `up` gdy aktualna wartość volume to `35` funkcja ma **zwrócić** `false`, w innych przypadkach funkcja ma **zwrócić** `true`
* Dodatkowo do zmiennej przekazanej przez referencje jako drugi argument przypisz **aktualną** wartość głośności
* Wypisz po każdym wywołaniu funkcji aktualną wartość głośności wg. wzoru `Volume: X`

Przykładowe wywołanie
```php
$isOk = remote('up', $curr);    //zmienna $isOk ma wartość true
echo 'Volume: ' . $curr;        //Volume: 31

$isOk = remote('up', $curr);    //zmienna $isOk ma wartość true
echo 'Volume: ' . $curr;        //Volume: 32

$isOk = remote('up', $curr);    //zmienna $isOk ma wartość true
echo 'Volume: ' . $curr;        //Volume: 33

$isOk = remote('up', $curr);    //zmienna $isOk ma wartość false
echo 'Volume: ' . $curr;        //Volume: 33

$isOk = remote('down', $curr);  //zmienna $isOk ma wartość true
echo 'Volume: ' . $curr;        //Volume: 32

$isOk = remote('down', $curr);  //zmienna $isOk ma wartość true
echo 'Volume: ' . $curr;        //Volume: 31
```

#### Zadanie 5

* Stwórz zmienną `$totalPrice` o wartości początkowej `0`
* Stwórz funkcję o nazwie `basket($productName, $price, $quantity)`, której argumenty to nazwa produktu, jego cena i ilość
* Funkcja ma za zadanie wyliczyć całkowitą cenę dla przekazanych wartości oraz dodać do zmiennej `$totalPrice` wyliczoną wartość
* Funkcja powinna wyświetlić komunikat `Nazwa produktu: cena`
* Wywołaj funkcję kilka razy z różnymi argumentami a następnie wypisz wartość zmiennej `$totalPrice` i sprawdź czy jest prawidłowa
