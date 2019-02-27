#  SESSION - sesje

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

W zadaniu stwórz trzy strony, które mają mieć następującą funkcjonalność:
* Pierwsza strona (`sessionSet.php`) ma nastawiać informacje w sesji pod kluczem ```counter``` na `0`.
* Druga strona (`sessionGet.php`) ma wyświetlać zawartość sesji pod kluczem ```counter``` i zwiększać ją o `1`.  
  Jeżeli nie ma takich danych w sesji, to strona powinna wyświetlić odpowiednią informacje.
* Trzecia strona (`sessionDel.php`) powinna usuwać dane z sesji (tylko te trzymane pod kluczem ```counter```).

#### Zadanie 2 - rozwiązywane z wykładowcą

Napisz skrypt, który na podstawie podanych ocen (formularz ocen z przedmiotów) liczy ich średnią arytmetyczną.
* Oceny trzymaj w tablicy, którą będziesz wkładać do sesji.
* Zadbaj o walidację wprowadzanych ocen (nie mniej niż `1` i nie więcej niż `6`).
* Pamiętaj, żeby sprawdzać, czy tablica z ocenami istnieje w sesji, jeżeli nie, to ją stwórz (wkładając do sesji pustą tablicę).
* Wszystkie zapamiętane oceny i ich średnia powinny być wyświetlane nad formularzem.

-------------------------------------------------------------------------------

#### Zadanie 3

Napisz skrypt, którego zadaniem będzie przechowywanie koszyka zakupowego.
* Stwórz formularz, z polem tekstowym (nazwa) oraz dwoma numerycznymi (ilość i cena), służącymi do dodawania produktu do koszyka
* Po wypełnieniu formularza powinien on być przesłany na tą samą stronę metodą `POST` a przesłany produkt wraz z ceną i ilością dodany do sesji pod kluczem `basket`
* Pamiętaj, iż klucz `basket` w sesji musi przechowywać więcej niż `1` produkt (użyj tablicy)
* Dodaj w pliku `index.php` link do pliku `basket.php`
* W pliku `basket.php` wyświetl zawartość koszyka oraz sumę cen produktów, pamiętaj iż każdy produkt ma dodaną ilość.

Przykład - plik `basket.php`:
```
Produkt 1 - 4 x 5.20zł = 20.80zł
Produkt 2 - 1 x 9.99zł =  9.99zł
Produkt 3 - 1 x 2.20zł =  2.20zł
                   SUMA: 32.99zł
```

#### Zadanie 4

Celem zadania jest napisanie prostej obsługi captcha (zabezpieczenie przed robotami spamującymi).
* Dodaj do strony formularz html z 3 polami tekstowymi (imię, nazwisko, mail)
* Formularz ma przesyłać dane do tej samej strony metodą `POST`
* Dodaj do formularza dodatkowe pole numeryczne, do którego będzie wpisywana captcha (w naszym wypadku wynik działania matematycznego)
* Podczas ładowania strony wylosuj 2 losowe liczby z przedziału `0-20` i zapisz je do zmiennych
* Oblicz sumę tych liczb i zapisz do sesji pod kluczem `captcha`
* Nad polem do wpisania captcha w formularzu wygeneruj napis `Wpisz poniżej sumę $liczba1 + $liczba2`
* Po przesłaniu formularza sprawdź czy wpisany wynik zgadza się z tym z sesji i wyświetl odpowiedni komunikat
* **PAMIĘTAJ** aby generowanie nowego wyniku wykonywać niżej w kodzie niż sprawdzanie formularza aby captcha nie została nadpisana w sesji
