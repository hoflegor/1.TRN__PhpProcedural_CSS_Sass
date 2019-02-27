#  Array - funkcje

> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

Napisz funkcję `arrayStats($array)`, która jako argument otrzyma tablicę **liczb całkowitych** i **zwróci** tablicę wg. zasad:
* znajdzie najmniejszy element w tablicy
* znajdzie największy element w tablicy
* obliczy średnią arytmetyczną z **unikalnych** elementów w tablicy
* zwróci nową tablicę z kluczami `min`, `max`, `avg` reprezentujące obliczone wartości

Przykład:
```php
$arr = [9, 4, -3, 0, 2, 9, 2, 2, 9];
//powinno zwrócić
[
    'min' => -3,
    'max' => 9,
    'avg' => 2.4  //pamiętaj, że średnia liczona jest z unikalnych elementów tablicy
]
```

#### Zadanie 2 - rozwiązywane z wykładowcą

Napisz funkcję `cutAndWrite($array)`, która jako argument otrzyma tablicę wyrazów i **zwróci** napis wg. zasad:
* Jeśli tablica posiada mniej niż `4` elementy funkcja powinna **zwrócić** `false`
* Z podanej tablicy wybierze trzy kolejne wyrazy rozpoczynając od drugiego wyrazu (czyli te o indeksach 1, 2 i 3)
* Zwrócony napis powinien reprezentować pobrane elementy złączone z użyciem znaku `_`

Przykład:
```php
$arr = ["Ala", "ma", "kota"];
$result = cutAndWrite($arr); // powinno zwrócić false ponieważ tablica ma mniej niż 4 elementy

$arr = ["Ala", "ma", "czarnego", "kota"];
$result = cutAndWrite($arr); // powinno zwrócić napis "ma_czarnego_kota"
```

-------------------------------------------------------------------------------

#### Zadanie 3

Napisz funkcję `returnEven($array)`, która jako argument otrzyma tablicę elementów i **zwróci** tablicę, która:
* sprawdzi ilość wystąpień danego elementu tablicy
* wybierze elementy, których ilość w tablicy jest parzysta i **zwróci** tablicę z tymi elementami

Przykład:
```php
$arr = [90, 'dog', 'sun', 'yellow', 15, 'sun', 1, 'dog', 'sun', 'sun', 9, 15];
//powinno zwrócić
[
    'dog',
    'sun',
    15
]
```

#### Zadanie 4

Napisz funkcję `firstLast($array)`, która jako argument otrzyma tablicę elementów i **wypisze** kolejno elementy wg. zasad:
* pierwszy element tablicy, po czym usunie go z tablicy
* ostatni element tablicy, po czym usunie go z tablicy

aż do wyczerpania elementów w tablicy, każdorazowo przy wypisanym elemencie powinna być informacja ile elementów **pozostało** w tablicy.

Przykład:
```php
$arr = ['Programista', 'zna', 'tablicowe', 'funkcje', 'PHP'];
//wypisze
Programista - 4 el.
PHP - 3 el.
zna - 2 el.
funkcje - 1 el.
tablicowe - 0 el.
```

#### Zadanie 5

Napisz funkcję `sherlock($el, $array, &$index)`, która jako argumenty otrzyma szukany element, tablicę elementów oraz zmienną `$index`.
* Funkcja powinna przez referencję zwrócić pozycję szukanego elementu do zmiennej `$index`
* Jeśli w tablicy nie znajduje się element zmienna `$index` powinna mieć wartość `false`
* Jeśli przekazany argument nie jest tablicą **funkcja** powinna **zwrócić** `false`
