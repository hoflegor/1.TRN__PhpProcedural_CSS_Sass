#  Curl - biblioteka

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

Zadanie ma na celu pobranie danych z przygotowanego przez nas adresu oraz odpowiednie ich przetworzenie i wyświetlenie.  
W pliku `index.php` napisz skrypt, który:  
* Używając `curl`, pobierze ze strony [http://api.coderslab.pl/curl.php][api-curl] znajdujące się tam dane
* Dane jakie są zwracane oddzielone znakiem `#` i są to kolejno:    
  * adres IP
  * `20` losowych liczb oddzielonych `,`
  * informacja z jakiego urządzenia weszliśmy na stronę, możliwe `device:computer` i `device:phone`
* Po pobraniu danych ze strony, używając odpowiednich funkcji sparsuj dane i wyświetl je w następujący sposób:
```
IP: adres_ip
SUMA: suma_pobranych_20_liczb
DEVICE: komputer/telefon
```
* Sprawdź działanie podając się za przeglądarkę standardową i mobilną, poniżej przykłady `user_agent`:  
  * `standard` - `Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36`
  * `mobile` - `Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30`
* Strona dodatkowo losowo zwraca błąd `404`, jest to celowe działanie z szansą `20%`
* Napisz kod, który dodatkowo sprawdzi czy strona nie zwróciła `404` a jeśli tak wypisze komunikat `Nie udało się pobrać danych`
* Jak sprawdzić czy strona zwraca `404` z użyciem `curl` przeczytaj [tutaj][curl-404]

-------------------------------------------------------------------------------

#### Zadanie 2

Zadanie ma na celu wypełnienie formularza pod przygotowanym przez nas adresem a następnie wyświetlenie zwróconego komunikatu.
W pliku `index.php` napisz skrypt, który:
* Używając `curl`, wypełnij na stronie [http://api.coderslab.pl/curlForm.php][api-curlForm] znajdujący się tam formularz
* Wejdź na stronę w swojej przeglądarce i zobacz jak wygląda formularz, możesz przetestować jego działanie
* Przeanalizuj kod html strony aby wiedzieć jakie klucze musi mieć tablica z przesyłanymi danymi, atrybut `name` elementów formularza
* Informacje na temat formularza:  
  * Formularz odbiera dane metodą `POST`
  * Imię musi mieć minimum `5` znaków
  * Nazwisko musi mieć minimum `5` znaków
  * Miasto musi być wybrane
  * Typ musi być wybrany
  * W przypadku błędu:  
    * Na stronie wyświetli się komunikat błędu  (tylko pierwszego napotkanego, nie wszystkich)
    * Na stronie wyświetli się tablica z danymi odebranymi przez `POST` aby ułatwić Ci wykrycie błędu
* Po przesłaniu danych przez `curl` wyświetl na swojej stronie zwrócone dane, będzie tam komunikat sukcesu lub błędu opisany powyżej
* Formularz po prawidłowej rejestracji wyświetli komunikat z numerem `ID` rejestracji,  
  Twoim celem jest wyświetlenie na stronie tego `ID` używając funkcji do stringów w formacie `ID REJESTRACJI: pobrane_id`


<!-- Links -->
[api-curl]:http://api.coderslab.pl/curl.php
[api-curlForm]:http://api.coderslab.pl/curlForm.php
[curl-404]:http://stackoverflow.com/a/408416/3668159