#  Composer - zarządzanie zależnościami

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

Przygotowanie:  
> Do zadania musisz w katalogu, który jest przygotowany do zadania zainicjować Composer'a i zainstalować bibliotekę

Celem zadania jest napisanie formularza, dla rejestracji użytkownika z generowaniem unikalnego ID po rejestracji z użyciem biblioteki `ramsey/uuid`
* W pliku `index.php`, stwórz formularz zawierający:  
  * `2` pola tekstowe `login` i `mail`
  * pole `textarea` `userDescription` z opisem użytkownika
* Formularz ma przesyłać dane metodą `POST` do tej samej strony
* Po przesłaniu formularza, sprawdź czy wszystkie pola zostały wypełnione
* Jeśli pola zostały wypełnione, wygeneruj `uuid` dla użytkownika z użyciem biblioteki [ramsey/uuid - packagist][ramsey-packagist] [ramsey/uuid - github][ramsey-github]
* Wygenerowane `uuid` powinno wyświetlić się pod formularzem wraz z komunikatem o przesłaniu poprawnych danych
* Zapisz wygenerowane `uuid` do ciasteczka o nazwie `uuid` z czasem ważności `6h`
* **Pamiętaj aby dodać katalog `vendor` do pliku `.gitignore`**

#### Zadanie 2 - rozwiązywane z wykładowcą

Przygotowanie:  
> Do zadania musisz w katalogu, który jest przygotowany do zadania zainicjować Composer'a i zainstalować bibliotekę

Celem zadania jest wygenerowanie tablicy `5` firm z wygenerowanymi danymi.
* W pliku `index.php`, wygeneruj z użyciem biblioteki [fzaninotto/faker - packagist][fzaninotto/faker-packagist] [fzaninotto/faker - github][fzaninotto/faker-github] losowe dane:  
  * Nazwa firmy
  * Imię i nazwisko właściciela
  * Adres firmy
  * Numer telefonu
* Napisz funkcję `generateCompany()`, która korzystając z biblioteki będzie generowała pojedynczą firmę i **zwracała** jej dane jako tablica
* Dane wygenerowanych firm zapisz do nowej tablicy o nazwie `companyList`
* Przeiteruj po tablicy `companyList` i wypisz dane w formie tabelki
* **Pamiętaj aby dodać katalog `vendor` do pliku `.gitignore`**

-------------------------------------------------------------------------------

#### Zadanie 3

Przygotowanie:  
> Do zadania musisz w katalogu, który jest przygotowany do zadania zainicjować Composer'a i zainstalować bibliotekę

* Skopiuj do plików z tym zadaniem, rozwiązanie zadania nr `3` z sesji.
* Dodaj do pliku gdzie wyświetlana jest lista produktów w koszyku:  
  * Przy każdej cenie produktu napis ze słownym opisem ceny w języku polskim
  * Przy sumie napis ze słownym opisem sumy w języku angielskim
* Użyj do tego biblioteki [kwn/number-to-words - packagist][kwn/number-to-words-packagist] [kwn/number-to-words - github][kwn/number-to-words-github]
* **Pamiętaj aby dodać katalog `vendor` do pliku `.gitignore`**

<!-- Links -->
[ramsey-packagist]:https://packagist.org/packages/ramsey/uuid
[ramsey-github]:https://github.com/ramsey/uuid
[fzaninotto/faker-packagist]:https://packagist.org/packages/fzaninotto/faker
[fzaninotto/faker-github]:https://github.com/fzaninotto/Faker
[kwn/number-to-words-packagist]:https://packagist.org/packages/kwn/number-to-words
[kwn/number-to-words-github]:https://github.com/kwn/number-to-words
