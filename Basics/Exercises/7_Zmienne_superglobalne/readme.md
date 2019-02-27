#  Zmienne superglobalne

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

Napisz funkcję `visitorData()`, której zadaniem jest **wypisanie** następujących informacji:
* Adresu IP osoby, która uruchomiła skrypt
* Przeglądarki osoby, która uruchomiła skrypt
* Czasu w którym osoba weszła na stronę

#### Zadanie 2 - rozwiązywane z wykładowcą

W plikach do zadania `zadanie2_1.php` i `zadanie2_2.php` dodaj linki kierujące do drugiego pliku, następnie:
* W każdym z plików wyświetl stronę, z której użytkownik na nią trafił (referer)
* Przeglądarkę użytkownika

-------------------------------------------------------------------------------

#### Zadanie 3

Napisz funkcję `checkBrowser()`, której zadaniem jest **zwrócenie** rodzaju przeglądarki jakiej używa użytkownik.
* Pobierz ze zmiennej superglobalnej informacje na temat przeglądarki
* Sprawdź jakiej przeglądarki używa użytkownik wg. poniższych zasad (jeśli ciąg zawiera):  
  * `Chrome` - `Google Chrome`
  * `Firefox` - `Mozilla Firefox`
  * `Opera` - `Opera`
  * `Safari` - `Safari`
* **zwróć** nazwę przeglądarki

Jeśli posiadasz kilka przeglądarek, sprawdź czy Twój kod działa prawidłowo
