# Podstawy PHP - zadania domowe
> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

>Zadania z dopiskiem "dodatkowe" są dla chętnych

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1

Napisz stronę, na której po przekazaniu metoda `GET` zostanie wygenerowany kod html z odpowiednimi elementami.
1. Przekazywane dane mają mieć klucze:  
   * `el` - nazwa elementu np. `div`, `p`
   * `count` - liczba całkowita **większa** od zera - ilość elementów
   * `text` - tekst znajdujący się w elemencie
2. Na stronie po odebraniu danych ma zostać wygenerowany kod html odpowiednich elementów.
3. Jeśli przekazany parametr `count` jest nie prawidłowy powinien zostać wypisany komunikat: `Błędny parametr count`
4. Jeśli parametr `text` jest pusty, powinny zostać wygenerowane puste elementy i **dodatkowo** komunikat `Brak tekstu`

#### Zadanie 2

Napisz stronę, na której znajdzie się formularz obliczający koszty przejazdu pojazdu.

1. Formularz ma zawierać następujące pola:  
   * Pole `select` o nazwie `car` z wyborem marki pojazdu - do wyboru `Mazda, Hyundai, Audi, Porshe, Lexus`
   * Pole numeryczne o nazwie `fuelPer100` z możliwością wpisania spalania na `100km` z dokładnością `2` miejsc dziesiętnych
   * Pole numeryczne o nazwie `pricePerFuel` z możliwością wpisania kosztu `1l` paliwa z dokładnością `2` miejsc dziesiętnych
   * Pole numeryczne o nazwie `distance` z możliwością wpisania odległości w kilometrach
2. Formularz ma być przesyłany metodą `POST` na tą samą stronę
3. Jeśli formularz został przesłany, na stronie powinien pojawić się komunikat. `Całkowity koszt podróży to X.XXzł`
4. Kwota powinna być zaokrąglona do `2` miejsc po przecinku
5. Formularz powinien posiadać `input` o typie `submit` do przesłania formularza a nie np. element `button`

#### Zadanie 3

Napisz stronę, na której znajdzie się formularz wynajmu biura.

1. Formularz ma zawierać następujące pola:  
   * Pole tekstowe o nazwie `officeName` - przechowujące nazwę biura
   * Pole **tekstowe** o nazwie `rentStart` - przechowujące datę rozpoczęcia wynajmu w formacie `RRRR-MM-DD`
   * Pole numeryczne o nazwie `rentTime` - przechowujące ilość dni wynajmu
   * Pole `select` o nazwie `bonus` z opcją wyboru rabatu `10%, 35%, 49%, 75%`, wartość `value` elementu `option` powinna być cyfrą bez znaku procenta `%`
2. Formularz ma być przesyłany  metodą `POST` na tą samą stronę
3. Jeśli formularz został przesłany na stronie powinien pojawić się całkowity koszt wynajmu przy założeniu:  
   * Nazwa biura jest krótsza niż `5` znaków, koszt `1` dnia wynajmu to `390zł`
   * Nazwa biura jest krótsza niż `10` znaków, koszt `1` dnia wynajmu to `278zł`
   * Nazwa biura jest dłuższa bądź równa `10` znaków, koszt `1` dnia wynajmu to `150zł`
4. Pamiętaj o naliczeniu bonusu jeśli został wybrany
5. Zwracany koszt wynajmu powinien mieć formę `Całkowity koszt wynajmu to X.XXzł`
6. Kwota powinna być zaokrąglona do `2` miejsc po przecinku

#### Zadanie 4 - dodatkowe

Do zadania zostały przygotowane `4` pliki `form1.php`, `form2.php`, `form3.php`, `formLast.php`.  
Celem zadania jest zrobienie formularza z krokami.  

1. Formularz w pliku `form1.php` ma kierować do pliku `form2.php` i wysyłać dane metodą `POST` a także zawierać:  
   * pole tekstowe o nazwie `name` - przechowujące imię użytkownika
   * pole tekstowe o nazwie `surname` - przechowujące nazwisko użytkownika
   * pole numeryczne o nazwie `age` - przechowujące wiek użytkownika
2. Po przesłaniu formularza nastąpi przekierowanie do pliku `form2.php`.
3. Plik ten powinien odebrać dane z formularza i zapisać je w sesji pod kluczem `etap1` (jako tablica asocjacyjna - pamiętaj o serializacji tej tablicy)
4. Formularz w pliku `form2.php` ma kierować do pliku `form3.php` i wysyłać dane metodą `POST` a także zawierać:  
   * pole tekstowe o nazwie `city` - przechowujące miasto użytkownika
   * pole tekstowe o nazwie `street` - przechowujące ulicę użytkownika
   * pole numeryczne o nazwie `streetNr` - przechowujące numer domu użytkownika
5. Po przesłaniu formularza nastąpi przekierowanie do pliku `form3.php`.
6. Plik ten powinien odebrać dane z formularza i zapisać je w sesji pod kluczem `etap2` (jako tablica asocjacyjna - pamiętaj o serializacji tej tablicy) - w tym momencie sesja powinna zawierać dane z `2` formularzy
7. Formularz w pliku `form3.php` ma kierować do pliku `formLast.php` i wysyłać dane metodą `POST` a także zawierać:  
   * pole `select` o nazwie `lang` z wyborem `en`, `de` , `fr` , `pl`
8. Po przesłaniu formularza nastąpi przekierowanie do pliku `formLast.php`.
9. Plik ten powinien odebrać dane z formularza i zapisać je w sesji pod kluczem `etap3` (jako tablica asocjacyjna - pamiętaj o serializacji tej tablicy) - w tym momencie sesja powinna zawierać dane z `3` formularzy
10. W pliku `formLast.php` wypisz na stronie tablicę z sesji zawierającej wszystkie etapy
11. Dodaj ciasteczko o nazwie `lang` z wartością taką jak przesłana w formularzu `3` etapu, i ważnością `7` dni.

#### Zadanie 5 - dodatkowe

Zmodyfikuj poszczególne etapy zadania `4` (najpierw skopiuj rozwiązanie zadanie `4` do folderu `zadanie5`)tak aby:  

1. W pliku `form2.php` - znalazł się link do pliku `form1.php`
2. W pliku `form3.php` - znalazł się link do pliku `form1.php` i `form2.php`
2. W pliku `formLast.php` - znalazł się link do pliku `form1.php`, `form2.php` i `form3.php`
3. W dodanych linkach przekaż parametr `GET` o nazwie `load` i wartości `1`
4. W plikach etapów formularza, sprawdź czy został przesłany parametr `load`.
5. Jeśli tak, pobierz wcześniej przesłane dane danego etapu formularza i spowoduj, iż zostanie on wypełniony wcześniej przesłanymi danymi.
6. Dodaj do sesji dodatkowy klucz `lastStage`, w którym przechowasz ostatni przesłany etap formularza na wypadek gdyby użytkownik przesłał ręcznie parametr `load` i otworzył plik `form3.php` bez jego wcześniejszego wypełniania.
