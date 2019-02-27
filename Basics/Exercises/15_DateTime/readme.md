#  DateTime - obiekt daty

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

Napisz funkcję `dateDiff($date1, $date2)`, której zadaniem jest **wypisanie** napisu, opisującego różnicę między 2 datami.
* Przekazywane daty są w formie napisu np: `19.10.2016 15:14:24`
* Funkcja ma obliczyć różnicę między 2 datami
* Wypisany napis ma być wg. wzoru `10dni 5godzin 2minuty 15sekund`
* Sprawdź działanie Twojej funkcji na kilku parach dat

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

Napisz funkcję `dateInAsia($datesArray)`, która jako argument otrzyma tablicę dat, a następnie **zwróci** odpowiednią tablicę wg. zasad:
* Każda data ma zostać zmieniona na czas w Azji, timezone `Asia/Hong_Kong`
* Utworzona ma zostać nowa tablica gdzie elementem będzie data w Azji

Przykład:
```php
$datesArray = ['18.02.2016 11:58:01', '19.03.1986 23:09:19', '01.09.2013 11:12:12', '05.04.1974 06:38:42', '31.05.2010 04:31:05'];
//powinno zwrócić
[
  '18.02.2016 19:58:01',
  '20.03.1986 07:09:19',
  '01.09.2013 19:12:12',
  '05.04.1974 15:38:42',
  '31.05.2010 12:31:05'
]
```

#### Zadanie 4

Napisz funkcję `dayOfBirth($birthDate)`, która na podstawie podanej daty zwróci dzień tygodnia, w którym osoba się urodziła.

#### Zadanie 5

Napisz funkcję `nextDecade($date)`, która **wypisze** na podstawie podanej daty informację o rocznicach daty przez kolejne `10` lat. Informacje powinny zawierać:
* dzień tygodnia wystąpienia daty w danym roku
* dzień roku wystąpienia daty w danym roku
* data musi być przekazana w formacie `RRRR-MM-DD`

Przykład:
```php
$date = '2016-03-01';
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
