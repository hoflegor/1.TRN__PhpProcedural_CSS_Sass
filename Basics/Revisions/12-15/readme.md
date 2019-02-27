# Podstawy PHP - zadania domowe
> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

>Zadania z dopiskiem "dodatkowe" są dla chętnych

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**
 
#### Zadanie 1

Stwórz następującą strukturę plików:
```
| index.php
-------------
| includes
| |_________ config.php
| |_________ functions.php
-------------
| globals
| |_________ globals.php
```

1. Plik `index.php`:  
   * powinien dołączać do swojej struktury wszystkie pozostałe `3` pliki (zastanów się nad kolejnością)
2. Plik `config.php`:  
   * powinien zawierać stała `SERVICE_URL` o wartości `http://coderslab.pl`
   * powinien zawierać stała `SERVER_MAIN` o wartości `/home/www/coderslab`
   * powinien zawierać stałą `LOCAL_TIMEZONE` o wartości `Europe/Warsaw`
3. Plik `functions.php`:  
   * powinien zawierać funkcję `listModules($type)`, **zwracającą** tablicę modułów kursu:  
     * jeśli `$type` równe `FE` powinno zwrócić **tablicę** zawierającą `htmlcss, javascript, jqueryFE, phpFE, wordpress, workshopFE`
     * jeśli `$type` równe `BE` powinno zwrócić **tablicę** zawierającą `phpBE, oop, mysql, jqueryBE, symfony, workshopBE`
   * powinien zawierać funkcję `githubModuleLink($module)` **zwracającą** link do modułu na github generowany wg. zasady:  
     * dodać do wartości stałej `SERVICE_URL` `/github/` oraz nazwę modułu (nazwy z funkcji `listModule`) np. `http://coderslab.pl/github/wordpress`
4. Plik `globals.php`:  
   * powinien zawierać jedną zmienną `lang` o wartości `pl`

#### Zadanie 2

1. Zainstaluj z użyciem Composera bibliotekę [vat-calculator-packagist][vat-calculator-packagist] [vat-calculator-github][vat-calculator-github]
2. W pliku `index.php` stwórz funkcję, `vat($country, $price)`, która jako argument przyjmie `2` znakowy kod kraju oraz cenę netto.
3. Funkcja ma **zwrócić** tablicę z kluczami `netto`,`brutto`, `vat` (wartość vat) z wyliczeniami używającymi biblioteki.
4. **Pamiętaj aby katalogu vendor nie dodawać do repozytorium**

#### Zadanie 3 

1. Zainstaluj z użyciem Composera bibliotekę [business-days-calculator-packagist][business-days-calculator-packagist] [business-days-calculator-github][business-days-calculator-github]
2. W pliku `index.php` stwórz funkcję `nextWorkingDay($date, $days)`, która zwróci kolejny pracujący dzień przy poniższych założeniach.
3. Argument funkcji to data, od której ma być wyliczona najbliższa data dnia roboczego po przesunięciu o `$days`
4. W funkcji skorzystaj z biblioteki, ustawiając jako wolne wszystkie soboty i niedziele
5. Dodaj jako dni wolne coroczne, `2017-05-01`,`2017-05-03`
6. Funkcja powinna **zwrócić** wyliczoną datę w formacie `dd.mm.rrrr`
7. **Pamiętaj aby katalogu vendor nie dodawać do repozytorium**

#### Zadanie 4 - dodatkowe 

W pliku `index.php` z użyciem biblioteki curl wykonaj poniższe działania:  

1. Pobierz z adresu `http://jsonplaceholder.typicode.com/posts/5/comments` komentarze dla postu o id `5`
2. Zwrócone dane są w formacie `json` aby zamienić go na tablicę użyj wbudowanej funkcji `json_decode($jsonText, true)` - [dokumentacja][json_decode]
3. Wypisz na stronie statystyki dotyczące każdego komentarza, jego `id` oraz ilość słów (klucz `body`)
4. Wypisane dane powinny mieć format `Komentarz ID: XX, ilość słów: YY`

<!-- Links -->
[vat-calculator-packagist]:https://packagist.org/packages/mpociot/vat-calculator
[vat-calculator-github]:https://github.com/mpociot/vat-calculator
[business-days-calculator-packagist]:https://packagist.org/packages/andrejsstepanovs/business-days-calculator
[business-days-calculator-github]:https://github.com/andrejsstepanovs/business-days-calculator
[json_decode]:https://secure.php.net/manual/pl/function.json-decode.php