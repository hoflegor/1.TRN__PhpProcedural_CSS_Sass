# Podstawy PHP - zadania domowe
> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

>Zadania z dopiskiem "dodatkowe" są dla chętnych

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1

Napisz funkcję `verifyPesel($pesel)`, której zadaniem będzie zweryfikowanie numeru `PESEL`.    
W numerze `PESEL` ostatnia cyfra to cyfra kontrolna, którą porównujemy z obliczeniami:  

1. Mnożymy kolejne liczby numeru `PESEL` przez "wagi" kolejnych liczb `1, 3, 7, 9, 1, 3, 7, 9, 1, 3` i je sumujemy
2. Z otrzymanego wyniku obliczamy modulo `10`
3. Otrzymane modulo odejmujemy od `10`
4. Otrzymany wynik powinien być zgodny z ostatnią cyfrą numeru `PESEL`, wówczas funkcja powinna zwrócić `true`
5. Jeśli modulo zwraca `0` wówczas ostatnią cyfrą numeru `PESEL` powinno być `0`
6. W przeciwnym wypadku funkcja powinna zwrócić `false`

Przykład:  

```php
$pesel = '81021590999';
//mnożymy kolejne liczby przez ich wagi
//8 x 1
//1 x 3
//0 x 7
itd.
```

#### Zadanie 2

1. Stwórz zmienną **globalną** `totalSum` o wartości początkowej `0`
2. Napisz funkcję `addCalc($nr1, $nr2)`, która przyjmuje jako argumenty dwie liczby całkowite.  
3. Zadaniem funkcji jest **zwrócić** wynik dodawania przekazywanych liczb
4. Ponadto funkcja ma dodać obliczoną sumę do zmiennej `totalSum`
5. Wywołaj kilka razy funkcję aby sprawdzić czy wartość `totalSum` prawidłowo się zmienia

#### Zadanie 3

Napisz funkcję `vatList($products)`, która jako argument przyjmie wielowymiarową tablicę z produktami, ich ceną i stawką vat.

1. Zadaniem funkcji jest zsumowanie wartości danej stawki vat.
2. Funkcja ma **zwrócić** tablicę gdzie kluczem jest stawka vat a wartością suma wartości wszystkich produktów o tej stawce vat

Przykład
```php
$products = [
    [
        'name'  => 'Mydło',
        'vat'   => 7,
        'value' => 19.99,
    ],
    [
        'name'  => 'Obiad',
        'vat'   => 5,
        'value' => 32.45,
    ],
    [
        'name'  => 'Sok Pomarańczowy',
        'vat'   => 7,
        'value' => 4.99,
    ],
    [
        'name'  => 'Paliwo',
        'vat'   => 23,
        'value' => 165.41,
    ],
];

//powinno zwrócić tablicę
[
    23 => 165.41, // Tylko paliwo
    7  => 24.98,  // Sok pomarańczowy i mydło
    5  => 32.45,  // Tylko obiad
]
```

#### Zadanie 4

Napisz funkcję `calcBMI($weight, $height)`, która obliczy `BMI - body mass index` dla podanych danych.

1. Aby obliczyć `BMI` należy podzielić wagę (w kilogramach) przez wzrost (w metrach) podniesiony do kwadratu (`waga /(wzrost ^2)`)
2. Funkcja otrzymuje wagę w kilogramach ale wzrost w centymetrach.
3. Funkcja ma **zwrócić** wyliczone `BMI` z dokładnością 2 miejsc po przecinku
4. Stwórz zmienną globalną `people`, która będzie tablicą osób, gdzie pojedynczy element tablicy reprezentuje wagę i wzrost osoby pod kluczami `weight` i `height`
5. Dodaj funkcję `peopleBMI($people)`, która otrzyma jako argument tablicę `people` i obliczy `BMI` dla każdej z osób oraz **zwróci** tablicę z wynikami gdzie kolejne elementy tablicy to wynik kolejnej osoby.

#### Zadanie 5 - dodatkowe

Napisz funkcję `deposit($cash, $percent, $years)`, która będzie obliczała zysk z lokaty na zadany procent w określonym czasie.  

1. Funkcja jako pierwszy argument przyjmuje kwotę lokaty, jako drugi oprocentowanie lokaty, jako trzeci, czas trwania w latach
2. Funkcja ma **zwrócić** tablicę, w której pod kluczem `profit` zostanie zwrócony **zysk** z lokaty a pod kluczem `totalCash` zostanie zwrócone końcowe saldo lokaty
3. Zwracane wartości mają mieć dokładność `2` miejsc po przecinku.
4. Zakładamy roczną kapitalizację lokaty (procent składany)

#### Zadanie 6 - dodatkowe

Napisz funkcję `calcTimeForDeposit($cash, $percent, $totalCash)`, która ma obliczać minimalny czas (w latach) na jaki musimy pozostawić pieniądze na lokacie przy określonym procencie.

1. Funkcja jako pierwszy argument przyjmuje kwotę lokaty, jako drugi oprocentowanie lokaty, jako trzeci, saldo końcowe jakie chcemy osiągnąć
2. Funkcja ma **zwrócić** liczbę całkowitą będącą **minimalną** ilością lat po jakich osiągniemy zakładane saldo końcowe, przy podanym procencie
3. Zakładamy roczną kapitalizację (procent składany)
