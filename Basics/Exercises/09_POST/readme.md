#  POST - przesyłanie danych

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

* W pliku do zadania znajduje się formularz przyjmujący imię i nazwisko.
* Formularz ten ma przekierowywać do **tej samej strony** metodą `POST`.
* Uzupełnij poprawnie metodę jaką formularz ma wysyłać dane
* Jeżeli strona została uruchomiona przez zapytanie `POST` to nad formularzem ma się wyświetlić napis:
  `Witaj, <podane imię> <podane nazwisko>`
* **Pamiętaj o sprawdzeniu czy dane zostały przesłane metodą POST**

#### Zadanie 2 - rozwiązywane z wykładowcą

* W pliku do zadania znajduje się formularz, który zawiera jedno pole tekstowe i jeden checkbox.
* Formularz ten ma przekierowywać do **tej samej strony** metodą `POST`.
* Uzupełnij poprawnie metodę jaką formularz ma wysyłać dane
* Skrypt ma sprawdzać, czy wpisany przez użytkownika tekst zawiera wulgaryzmy, jeżeli tak, to powinien zastąpić je dowolnymi znakami.  
  Na przykład frazę `cholera, znowu to PHP` powinien zastąpić frazą `*******, znowu to PHP`.
* Jeżeli użytkownik zaznaczy checkbox `Jestem świadomy konsekwencji`, to skrypt nie sprawdzi wulgaryzmów i wyświetli wpisany tekst
* Tekst wpisany przez użytkownika ma wyświetlić się (w formie ocenzurowanej lub nie) **pod** formularzem.
* Dodatkowo postaraj się, aby liczba gwiazdek odpowiadała liczbie znaków w cenzurowanym słowie.
* **Pamiętaj o sprawdzeniu czy dane zostały przesłane metodą POST**

Hint: listę wulgaryzmów możesz stworzyć samodzielnie w postaci tablicy, lub poszukać gotowych tablic w internecie

-------------------------------------------------------------------------------

#### Zadanie 3

* W pliku do zadania znajduje się formularz, który zawiera jedno pole liczbowe
* Formularz ten ma przekierowywać do **tej samej strony** metodą `POST`.
* Uzupełnij poprawnie metodę jaką formularz ma wysyłać dane
* Skrypt ma przeliczać temperaturę w stopniach celsjusza na temperaturę w stopniach fahrenheita (i w drugą stronę).
* Formularz ma dwa przyciski `submit`, każdy z nich ma inny atrybut `name` mówiący o sposobie konwersji.
* Aby przekonać się, który guzik został wciśnięty musisz sprawdzić, który z kluczy istnieje w tablicy `$_POST`.
* Jeżeli chcesz więcej przeczytać o tym, jak odróżniać który z guzików submit został naciśnięty możesz to zrobić [tutaj][submit-btns].
* Aby przeliczyć jednostki użyj wzorów znajdujących się [tutaj][degrees-convertion].
* **Pamiętaj o sprawdzeniu czy dane zostały przesłane metodą POST**

#### Zadanie 4

* W pliku do zadania znajduje się formularz, który zawiera jedno pole liczbowe, oraz pola typu `radio`
* Formularz ten ma przekierowywać do **tej samej strony** metodą `POST`.
* Uzupełnij poprawnie metodę jaką formularz ma wysyłać dane
* Napisz skrypt przeliczający waluty:  
  * `EUR → USD`
  * `USD → EUR`
  * `EUR → PLN`
  * `PLN → EUR`
  * `USD → PLN`
  * `PLN → USD`
* Po przesłaniu formularza przeliczona kwota powinna pokazać się ponad formularzem.
* Kursy walut możesz przygotować jako tablicę (kursy mogą być przez Ciebie wymyślone lub możesz je znaleźć na stronie [NBP][nbp])
* **Pamiętaj o sprawdzeniu czy dane zostały przesłane metodą POST**

#### Zadanie 5

* W pliku do zadania znajduje się formularz, zawierający jedno pole tekstowe.
* Formularz ten ma przekierowywać do **drugiego pliku** metodą `POST`.
* Uzupełnij poprawnie metodę jaką formularz ma wysyłać dane oraz adres pliku gdzie mają trafić dane
* Skrypt ma przeliczyć wpisaną do formularza wartość binarną liczby na wartość dziesiętną
* **Nie korzystaj z gotowych funkcji php**
* Skrypt musi wykonać następujące kroki:  
  * Sprawdzenie czy przekazany ciąg zawiera **tylko** `0` i `1`, jeśli nie, wyświetlić stosowny komunikat
  * Podzielić ciąg na pojedyncze znaki
  * Idąc od końca ciągu mnożyć kolejne liczby przez kolejne potęgi liczby `2`  
    * `Ostatnia liczba` x `2^0`
    * `Przedostatnia liczba` x `2^1`
    * itd.
* Po dokonaniu obliczenia wyświetl na stronie komunikat np. `1001 to liczba 9`
* **Pamiętaj o sprawdzeniu czy dane zostały przesłane metodą POST**

Jeżeli nie rozumiesz jak przeliczyć liczbę zapisaną w systemie binarnym na system dziesiętny to zajrzyj [tutaj][binary-convertion].

<!-- Links -->
[degrees-convertion]:https://pl.wikipedia.org/wiki/Skala_Fahrenheita#Spos.C3.B3b_dok.C5.82adny
[submit-btns]:http://stackoverflow.com/a/2680198
[nbp]:http://www.nbp.pl/home.aspx?navid=archa&c=/ascx/tabarch.ascx&n=a008z170112
[binary-convertion]:http://www.wikihow.com/Convert-from-Binary-to-Decimal
