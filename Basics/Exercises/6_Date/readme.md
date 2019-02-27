function#  Date - data w php

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

Napisz funkcję `dateDiff($date1, $date2)`, której zadaniem jest **wypisanie** napisu, opisującego różnicę między 2 datami.
* Przekazywane daty są w formie napisu np: `19.10.2016 15:14:24`
* Funkcja ma obliczyć różnicę między 2 datami
* Wypisany napis ma być wg. wzoru `10dni 5godzin 2minuty 15sekund`

Sprawdź działanie Twojej funkcji na kilku parach dat

#### Zadanie 2 - rozwiązywane z wykładowcą

Napisz funkcje `convertDate($date, $days, $hours, $minutes, $seconds)`, która **zwróci** zmodyfikowaną datę wg. zasad:
* Do przekazanej jako argument daty np. `19.10.2016 15:14:24` dodana ma zostać odpowiednia ilość dni, godzin, minut i sekund
* Przekazane wartości mogą być również ujemne, wówczas odpowiednią ilość należy odjąć od daty

Przykład:
```php
$date = '19.10.2016 15:14:24';
convertDate($date, 3, 1, 0, 15);
//zwróci 22.10.2016 16:14:39

$date = '19.10.2016 15:14:24';
convertDate($date, -4, -2, 9, 15);
//zwróci 15.10.2016 13:23:39
```

-------------------------------------------------------------------------------

#### Zadanie 3

Napisz funkcję `dateIsOk($datesArray)`, która jako argument otrzyma tablicę z napisami reprezentującymi daty, a następnie **zwróci** tablicę stworzoną wg. zasad:
* Każda data w tablicy ma zostać sprawdzona pod kątem poprawności
* Utworzona ma zostać nowa tablica gdzie elementem będzie sprawdzona data z "dodanym" napisem
* Napisz ma mieć wartość `OK` jeśli data jest prawidłowa lub `NOK` jeśli nie jest prawidłowa

Przykład:
```php
$datesArray = ['31.02.2016', '19.03.1986', '99.09.2013', '05.04.1974', '31.04.2030'];
dateIsOk($datesArray);
//powinno zwrócić
[
    '31.02.2016_NOK',
    '19.03.1986_OK',
    '99.09.2013_NOK',
    '05.04.1974_OK',
    '31.04.2030_NOK'
]
```

#### Zadanie 4

Napisz funkcję `dayOfBirth($birthDate)`, która na podstawie podanej daty w formacie `19.10.2016 15:14:24`  zwróci dzień tygodnia, w którym osoba się urodziła.

#### Zadanie 5

Napisz funkcję `nextDecade($date)`, która **wypisze** na podstawie podanej daty informację na temat rocznic przez kolejne `10` lat. Informacje do wypisania to:
* dzień tygodnia wystąpienia daty w danym roku
* dzień roku wystąpienia daty w danym roku

Data może być przekazana w formacie `RRRR-MM-DD` lub `DD.MM.RRRR`

Przykład:
```php
$date = '2016-03-01';
nextDecade($date);
//wypisze
2017-03-01, 59 dzień roku, Śro
2018-03-01, 59 dzień roku, Czw
2019-03-01, 59 dzień roku, Pią
2020-03-01, 60 dzień roku, Nie
2021-03-01, 59 dzień roku, Pon
2022-03-01, 59 dzień roku, Wto
2023-03-01, 59 dzień roku, Śro
2024-03-01, 60 dzień roku, Pią
2025-03-01, 59 dzień roku, Sob
2026-03-01, 59 dzień roku, Nie
```
