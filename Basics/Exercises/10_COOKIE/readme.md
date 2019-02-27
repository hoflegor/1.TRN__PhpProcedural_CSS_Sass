#  COOKIE - ciasteczka

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

W tym zadaniu stwórz trzy strony:
* Pierwsza strona (`cookieSet.php`) ma nastawiać ciasteczko o nazwie ```User``` na Twoje imię, z ważnością `24h`.
* Druga strona (`cookieGet.php`) ma wyświetlać zawartość ciasteczka ```User```.  
  Jeżeli nie ma takiego ciasteczka, to powinna wyświetlić odpowiednie informacje.
* Trzecia strona  (`cookieDel.php`) powinna kasować ciasteczko o nazwie ```User```.  
  Jeżeli nie ma takiego ciasteczka, to powinna wyświetlić odpowiednie informacje.

#### Zadanie 2 - rozwiązywane z wykładowcą

W tym zadaniu stwórz dwie strony:
* Na pierwszej stronie (`index.php`) znajduje się formularz z dwoma polami tekstowymi i polem `select`:  
  * pierwsze pole to nazwa ciasteczka
  * drugie to jego wartość
  * select to czas **w godzinach** ważności ciasteczka
* Formularz ma przekierowywać do tej samej strony metodą `POST`
* Jeżeli na tę stronę wejdziemy metodą `POST`, to ma ono tworzyć nowe ciasteczko o podanej nazwie i wartości.
* Dodaj link do drugiej strony (`cookieList.php`)
* Na drugiej stronie (`cookieList.php`) wyświetl wszystkie ciasteczka, do których masz dostęp.

Hint: Jak wczytać wszystkie ciasteczka? Przeczytaj [tutaj][all-cookies].

-------------------------------------------------------------------------------

#### Zadanie 3

W tym zadaniu stwórz trzy strony:
* `createCookies.php`, na której wygenerujesz `3` ciasteczka z nazwami `number1`, `number2` i `number3` i wartościami będącymi losowymi liczbami
* Na drugiej stronie (`index.php`) wyświetl wszystkie ciasteczka, do których masz dostęp.
* Przy każdym z nich wygeneruj link do trzeciej strony (`cookieDel.php`) przekazując `GET` nazwę ciasteczka.
* Na trzeciej stronie poinformuj o tym, że usuwasz ciasteczko i następnie je usuń. Nazwę ciasteczka pobierz z `GET`.
* Sprawdź czy Twój kod działa poprawnie

#### Zadanie 4

W tym zadaniu stwórz dwie strony:
* Na pierwszej stronie (`index.php`) stwórz formularz z elementem `select` oraz opcjami wyboru zgodnymi z tablicą przygotowaną w pliku.
* Strona ma przesyłać dane za pomocą `POST` do drugiej strony (`setLang.php`), która ma ustawić ciasteczko `language` na wartość wybraną przez użytkownika.
* Po ponownym wejściu na pierwszą powinna być wyświetlana informacja powitalna w wybranym przez użytkownika języku.
* Gdy ciasteczko nie istnieje, wiadomość powitalna powinna być wyświetlana w języku polskim

#### Zadanie 5

W tym zadaniu stwórz jedną stronę:
* Na pierwszej stronie (`index.php`), znaleźć ma się formularz z `5` polami tekstowymi `input`
* Formularz ma przesyłać dane z użyciem `POST` do tej samej strony
* Po otrzymaniu danych z formularza, stwórz tablicę z kolejnymi danymi z pól tekstowych i zapisz ją do ciasteczka o nazwie `textArray` (jeżeli ciasteczko już istnieje to nadpisz jego wartość)
* Jeśli ciasteczko już istnieje wypełnij pola `input` formularza danymi jakie w danej chwili znajdują się w ciasteczku (pierwsza wartość z tablicy powinna zostać wpisana do pierwszego inputu, druga watość do drugiego, itd)

<!-- Links -->
[all-cookies]:http://stackoverflow.com/questions/9577029/can-i-display-all-the-cookies-i-set-in-php
