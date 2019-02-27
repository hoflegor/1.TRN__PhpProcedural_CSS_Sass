#  Dołączanie plików

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

Do zadania zostały przygotowane pliki `main.php`, `page1.php`, `page2.php` oraz `page3.php`.  

Celem zadania jest dołączenie plików do `index.php` aby stworzyć prostą nawigację po podstronach.
* W pliku `index.php` znajdują się linki do konkretnych podstron (tak naprawdę to linki do tej samej strony które przekazują nazwę podstrony metodą GET).
* Jeśli przesłany został parametr `GET`, dodaj w pliku `index.php` plik odpowiedniej strony.
* Sprawdź czy Twoja nawigacja działa a podstrony wyświetlają komunikaty w prawidłowych językach

#### Zadanie 2 - rozwiązywane z wykładowcą

* W pliku `functions.php` napisz funkcję `showAndSum()`, która:  
  * Generuje tablicę `5` losowych liczb całkowitych
  * Sumuje elementy w tablicy do zmiennej
  * **Wyświetla** wylosowane liczby oddzielone `,`
  * **Wyświetla** sumę wylosowanych liczb np. `Suma wylosowanych liczb to: $suma`
* Dodaj do pliku `index.php` plik z funkcjami i wywołaj funkcję kilka razy aby sprawdzić czy działa poprawnie

-------------------------------------------------------------------------------

#### Zadanie 3

W pliku `index.php` przygotowana została struktura strony wraz z formularzem.
* Dodaj plik `functions.php` do głównego katalogu, w którym napisz funkcję `formData()` wyświetlającą przesłane przez formularz dane
* Dodaj stworzony plik do pliku `index.php`
* Podziel kod pliku `index.php` na pliki, i dodaj je do katalogu `mainStructure`:  
  * `form.php` - zawierający kod formularza
  * `header.php` - zawierający header strony
  * `footer.php` - zawierający footer strony
* Zmodyfikuj kod `index.php` aby dołączał on odpowiednie pliki z kodem w odpowiednich miejscach
