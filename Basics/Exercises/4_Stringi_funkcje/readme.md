#  String - funkcje

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

Napisz funkcje `evenBigOddSmall($string)`, która zmodyfikuje i **zwróci** podany jako argument napis:
* Parzyste wyrazy powinny zostać zamienione na duże litery
* Nieparzyste wyrazy powinny zostać zamienione na małe litery
* W nowo utworzonym napisie wyrazy powinny być połączone znakiem `_`

Przykład:
```php
$string = "Nice to be great developer";
//zamieni na "nice_TO_be_GREAT_developer"
```

#### Zadanie 2 - rozwiązywane z wykładowcą

Napisz funkcje `foundAndReplace($array)`, która jako argument otrzyma tablicę maili a następnie **zwróci** tablice:
* W każdym mailu odnajdzie pozycję znaku `@` i zapisze ją jako element nowej tablicy
* Poza zwróceniem powyższej tablicy funkcja powinna zamienić wszystkie domeny maili na `gmail.com` oraz **wypisać** je na stronie

Przykład:
```php
$mailList = ['john.doe@interia.pl', 'mark.willow@wp.pl'];
//powinno zwrócić
//[8, 12]
//oraz wypisać
//john.doe@gmail.com
//mark.willow@gmail.com
```

-------------------------------------------------------------------------------

#### Zadanie 3

Napisz funkcję `switchString($string)`, która jako argument otrzyma napis a następnie **zwróci** napis:
* Odwracając kolejność znaków w napisie (ostatni znak będzie pierwszym, pierwszy ostatnim itd)  
  Hint: sprawdź czy nie ma wbudowanej funkcji wykonującej to zadanie  
* Wytnie pierwsze `5` znaków z napisu i je **zwróci**
* Jeśli napis ma mniej niż `5` znaków, funkcja powinna zwrócić `false`
  
#### Zadanie 4 

Napisz funkcję `fillWithDots($array)`, która jako argument otrzyma tablicę wyrazów a następnie **wypisze** kolejne wyrazy wg. zasad:
* Sprawdzi jaką długość ma najdłuższy napis
* Doda do wyrazu tyle kropek na jego końcu aby długość nowo utworzonego napisu była równa najdłuższemu napisowi

Przykład:
```php
$wordArray = ['white', 'snow', 'is', 'falling', 'wow'];
//wypisze
//white..
//snow...
//is.....
//falling
//wow....
```

Hint: przed wypisaniem napisów wypisz na stronie tag `<pre>`, wtedy czcionka zostanie zamieniona na taką o stałej szerokości i efekt będzie dobrze widoczny.

#### Zadanie 5

Napisz funkcję `checkLeapYear($string)`, która w napisie, reprezentującym datę wg. formatu `dd.mm.rrrr godz:min:sek` podanym jako argument:
* Sprawdzi czy w podanej dacie rok to rok przestępny (rok podzielny przez `4`) 
  * Jeśli tak **zamieni** miesiąc na większy o `2`
  * Jeśli miesiąc to `12` zmiana nie następuje, jeśli `11`, zmiana na `12`
* W pozostałych przypadkach zamieni miejscami godziny i sekundy  
  * Zamiana godzin i sekund ma mieć miejsce tylko jeśli wartość sekund jest mniejsza bądź równa `23`
* W każdym innym przypadku funkcja powinna **zwrócić** `false`
* Funkcja powinna zwrócić zmodyfikowany string z datą o ile nie zwraca `false`

Przykład:
```php
$dateString = '15.11.2012 12:58:04';
//jest to rok przestępny i miesiąc to 11 więc zmianiamy na 12
//15.12.2012 12:58:04
$dateString = '03.05.2011 11:08:19';
//nie jest to rok przestępny więc zamieniamy miejscami godziny i sekundy
//03.05.2011 19:08:11
```