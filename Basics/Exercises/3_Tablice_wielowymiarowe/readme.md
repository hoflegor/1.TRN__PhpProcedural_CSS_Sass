#  Tablice wielowymiarowe

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

* Stwórz funkcje `generate2D($n)`, która stworzy i **zwróci** tablice kwadratową o podanej ilości wymiarów z losowymi liczbami
* Tablica kwadratowa to taka, w której liczba elementów pierwsze wymiaru jest taka sama jak elementów w drugim wymiarze
* Wypełnij tablicę losowymi liczbami, aby wygenerować losowa liczbą z przedziału użyj funkcji [mt_rand][mt_rand]
* Wypisz tablicę używając `print_r()`

Hint: Aby tablica była czytelna wizualnie użyj następującego zapisu:

```php
echo '<pre>';
print_r($array);
echo '</pre>';
```

#### Zadanie 2 - rozwiązywane z wykładowcą

* Wygeneruj tablicę z zadania 1 i przypisz ją do zmiennej `$randArray`
* Wypisz tablicę korzystając z `print_r()`
* Napisz funkcję `sumWithoutDiagonal(&$sum)`, która obliczy sumę elementów tablicy, od której odjęta będzie przekątna macierzy jaką tworzy tablica
* Do funkcji tablica nie jest przekazana przez argument, więc uzyskaj do niej dostęp w funkcji w odpowiedni sposób.
* Przekątna macierzy to suma elementów gdzie numer wiersza i kolumny jest taki sam
* Funkcja jako argument przyjmuje zmienną, do której przez referencję przypisz obliczoną sumę
* Wypisz komunikat na stronie `Suma elementów tablicy bez przekątnej to: X`

Przykład tablicy wielowymiarowej i wyjaśnienie przekątnej

```php
$arr = [
    [ 1,  5,  1,  4],
    [ 8, 67,  9, 14],
    [ 2, 43, 14,  5],
    [10, 49, 87, 99],
]
//przekątna macierzy to suma 1 + 67 + 14 + 99
```

-------------------------------------------------------------------------------

#### Zadanie 3

* Wygeneruj tablicę z zadania1 i przypisz ją do zmiennej `$randArray`
* Napisz funkcję `isAllEven($array)`, której zadaniem jest sprawdzenie czy wszystkie elementy są parzyste
* Do sprawdzenia użyj pętli zagnieżdżonych oraz zamiast `if ... else` operatora trójargumentowego
* Funkcja ma **zwracać** `true` lub `false` w zależności od wyniku

Hint: Możesz stworzyć w funkcji zmienną, która domyślnie będzie miała wartość `true` (wszystkie parzyste) a gdy jakaś liczba nie będzie parzysta zmień wartość na `false` i odrazu ją zwróć.  
Dlaczego odrazu zwracamy `false`? Ponieważ skoro jedna liczba nie jest parzysta nie ma konieczności dalszego sprawdzania.

#### Zadanie 4

* Zmodyfikuj funkcję z zadania 1 (ale tylko na potrzeby tego zadania, najlepiej skopiuj kod funkcji) aby losowane liczby mogły być również ujemne
* Wygeneruj tablicę zmodyfikowaną funkcją i zapisz ją do zmiennej `randMinusPlus`
* Stwórz funkcję `avgAbs($array)`, która jako argument otrzyma wygenerowaną tablicę
* Funkcja ma dla każdej tablicy drugiego wymiaru obliczyć średnią wartość jej elementów, stwórz do tego celu nową tablicę, która przechowa te dane
* Następnie zmodyfikuj główną tablicę, w ten sposób aby każdy jej element został **zamieniony** na bezwzględna wartość różnicy tego elementu i średniej
* Wartość bezwzględną obliczysz funkcją [abs][abs]

Przykład:
```php
$arr = [
    [ 1, 5,  3],//średnia to 3
    [ 8, 2,  5],//średnia to 5
    [ 2, 1, -6],//średnia to -1
    [-9, 3, -3],//średnia to -3
]

$result = [
    [2, 2, 0],//odległośc 1 od 3 to 2, odległość 5 od 3 to 2, odległość 3 od 3 to 0
    [3, 3, 0],//itd.
    [3, 2, 5],//itd.
    [6, 6, 0],//itd.
]
```
#### Zadanie 5

* Napisz funkcję `untilOdd()`, w której za pomocą funkcji z zadania 1 będziesz generować tablicę losowych liczb
* Tablica ma być generowana dopóki suma jej liczb nie będzie nieparzysta
* Musisz w tym celu użyć pętli `while`, w której sprawdzana musi być suma liczba w tablicy czy jest nieparzysta
* Gdy wygenerowana tablica okaże się prawidłową funkcja ma ją **zwrócić**
* Wypisz zwróconą tablicę z użyciem `print_r()` i sprawdź czy Twoja funkcja działa prawidłowo


<!--Links-->
[mt_rand]: https://secure.php.net/manual/en/function.mt-rand.php
[abs]: https://secure.php.net/manual/en/function.abs.php
