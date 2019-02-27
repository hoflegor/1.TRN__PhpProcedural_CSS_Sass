#  GET - przesyłanie danych

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

* Napisz stronę, która wczyta ze zmiennej `GET` dwie zmienne: ```start``` i ```end``` (dla uproszczenia załóżmy, że będziemy przesyłać tylko liczby całkowite).  
* Następnie strona wypisze wszystkie liczby od ```start``` do ```end```.  
* Jeżeli zmienne nie są przesłane, to strona ma wypisać odpowiednią informację na ten temat.
* Na drugiej stronie stwórz kilka linków w **html-u** do pierwszej strony. Informacje przesyłaj za pomocą GET.
* Sprawdź czy Twój kod działa poprawnie
* **Pamiętaj o sprawdzeniu czy dane zostały przesłane metodą GET**

#### Zadanie 2 - rozwiązywane z wykładowcą

W pliku (`index.php`) przygotowany jest formularz przesyłający metodą `GET` numer strony.
* Uzupełnij poprawnie metodę jaką formularz ma wysyłać dane
* Uzupełnij poprawnie plik, do którego formularz przesyła dane (`page.php`)
* W pliku (`page.php`) odbierz dane przesłane metoda `GET` a następnie:  
  * sprawdź czy przesłana wartość to liczba całkowita, jeśli nie wyświetl na stronie komunikat
  * wyświetl dzielniki całkowite tej liczby
* **Pamiętaj o sprawdzeniu czy dane zostały przesłane metodą GET**`

-------------------------------------------------------------------------------

#### Zadanie 3

Dopisz funkcjonalność do dwóch stron:
* Pierwsza strona (`multi.php`) ma pobierać dwie zmienne z `GET` o nazwach ```width``` i ```height```
* Jeżeli informacje nie są przesłane to ```width = 5``` i ```height = 10```
* Następnie wygeneruj tabliczkę mnożenia o podanej wysokości i szerokości
* Na drugiej stronie (`index.php`) stwórz kilka linków do pierwszej strony. Przesyłaj informację za pomocą GET.
* **Pamiętaj o sprawdzeniu czy dane zostały przesłane metodą GET**

#### Zadanie 4

Dopisz funkcjonalność do dwóch stron:
* Na pierwszej stronie (`index.php`) wygeneruj linki do strony `search.php` które będą przesyłały metodą GET `id` szukanego produktu (wygeneruj linki dla `id` z zakresu od `0` do `7`)
* Druga strona (`search.php`) po odebraniu danych powinna odnaleźć w przygotowanej w pliku tablicy produkt (zakładamy, że id to klucz w tablicy)
* Jeśli produkt znajduje się w tablicy powinna zostać wyświetlona jego nazwa i cena np.`Asus Transformer - 15.40zł`
* Jeśli produkt nie znajduje się w tablicy powinien zostać wyświetlony komunikat `Product not found.`
* **Pamiętaj o sprawdzeniu czy dane zostały przesłane metodą GET**

#### Zadanie 5

Dopisz funkcjonalność do trzech stron:
* Pierwsza strona (`index.php`), powinna generować linki do strony `birthYear.php` przekazując metodą GET dane pod kluczem `year` (od `1980` do `2010`)

* Druga strona (`birthYear.php`) powinna odebrać przesłane poprzez `GET` dane z `index.php` i wygenerować `5` linków, gdzie każdy z nich ma przenosić na stronę `mixBirthYear.php` przekazując metodą GET następujące dane:
  * year - dane przesłane z poprzedniej strony
  * mix - losowa wartość z zakresu od `-10` do `10`
  
* Trzecia strona (`mixBirthYear.php`) ma pobrać dane z `GET` odnośnie roku i wartości `mix` i wyświetlić rok zmodyfikowany o tyle lat ile przesłano w `mix`

**Za każdym razem pamiętaj o sprawdzeniu czy dane zostały przesłane metodą GET**

Przykład:
```php
//plik index.php
<a href='birthYear.php?year=1980'> Link do roku 1980 </a>
<a href='birthYear.php?year=1981'> Link do roku 1981 </a>
...
<a href='birthYear.php?year=2010'> Link do roku 2010 </a>


//plik birthYear.php któremu przekazaliśmy wartość 1985 generuje linki (pamiętaj wartości mix są losowe):
<a href='mixBirthYear.php?year=1985&mix=-2'> Rok 1985, mix -2 </a>
<a href='mixBirthYear.php?year=1985&mix=-5'> Rok 1985, mix -5 </a>
<a href='mixBirthYear.php?year=1985&mix=7'> Rok 1985, mix 7 </a>
<a href='mixBirthYear.php?year=1985&mix=2'> Rok 1985, mix 2 </a>
<a href='mixBirthYear.php?year=1985&mix=1'> Rok 1985, mix 1 </a>

//plik mixBirthYear.php wyświetla odpowiedni rok (tutaj przykład dla wartości year = 1985 i mix = -5)
Rok to: 1980
```
