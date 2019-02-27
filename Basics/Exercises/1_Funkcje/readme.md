#  Funkcje

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

Napisz funkcję ```rentCost($days)```, która pobiera liczbę dni jako argument, a następnie wylicza koszt wynajmu pokoju według podanego wzoru:
* wynajem trwa jeden dzień, koszt pokoju `200` zł/dzień,
* wynajem trwa od dwóch do trzech dni, koszt pokoju `180` zł/dzień,
* wynajem trwa od czterech do siedmiu dni, koszt pokoju `160` zł/dzień,
* wynajem trwa osiem lub więcej dni, koszt pokoju `150` zł/dzień.

Dodatkowo za każdy **pełny** tydzień (`7` dni) przysługuje `50` zł zniżki.  
Funkcja ma **zwracać** obliczony koszt.

Przykład:
```php
echo rentCost(8);   //1150
echo rentCost(3);   //540
echo rentCost(15);  //2150
```

#### Zadanie 2 - rozwiązywane z wykładowcą

Napisz funkcję ```perfectNumber($n)```, która przyjmuje liczbę całkowitą. Funkcja **zwraca** następujące wartości:
* `true`, gdy liczba jest doskonała,
* `false`, gdy liczba nie jest doskonała.

Liczba doskonała jest równa sumie swoich dzielników. Przykładami takich liczb są:
* `1 = 1`
* `6 = 1 + 2 + 3`
* `28 = 1 + 2 + 4 + 7 + 14`

-------------------------------------------------------------------------------

#### Zadanie 3

Napisz skrypt, który podaną przez użytkownika kwotę rozmieni na **jak najmniejszą** liczbę monet i banknotów o nominałach `1`, `2`, `5`, `10` zł.
Przykład:
* `188zł` zostanie rozmienione na:
  * `18` banknotów `10zł`,
  * `1` moneta `5zł`,
  * `1` moneta `2zł`,
  * `1` moneta `1zł`.

Funkcja przyjmuje liczby całkowite, czyli podana kwota ma być w pełnych złotych.  
Funkcja powinna **zwracać** tablicę, gdzie kluczem jest nominał monety a wartością jej ilość.

#### Zadanie 4

Napisz funkcję `max2($n1, $n2)`.

* Funkcja przyjmuje dwie liczby, a następnie **zwraca** większą z nich.
* Następnie napisz funkcję `max3($z1, $z2, $z3)` **zwracającą** największą spośród trzech podanych liczb.
* Funkcja `max3` ma do tego celu używać funkcji `max2`.

#### Zadanie 5

Napisz funkcję `rockPaperScissors($player1, $player2)`, która przyjmuje dwa napisy i na ich podstawie **zwraca** informacje, kto wygrał.  
Prawidłowe napisy przyjmowane przez funkcję to: `paper`, `scissors`, `rock`.

Funkcja ma **zwracać** jeden z czterech napisów:
* `Player 1 win`
* `Player 2 win`
* `Draw`
* `Wrong input`

Przykład:
```php
$winner1 = rockPaperScissors('paper','rock');
echo($winner1);  // Player 1 win

$winner2 = rockPaperScissors('paper','paper');
echo($winner2);  // Draw

$winner3 = rockPaperScissors('paper','dummy');
echo($winner3);  // Wrong input
```
