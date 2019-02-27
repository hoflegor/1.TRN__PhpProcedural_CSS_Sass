**_`__****`_**<img alt="Logo" src="http://coderslab.pl/wp-content/themes/coderslab/svg/logo-coderslab.svg" width="400">

# Podstawy PHP - Snippety
> Krótkie kawałki kodu, które pokazują zależności, rozwiązują popularne problemy oraz pokazują jak używać niektórych funkcji.


#### 1. W jaki sposób wywołać funkcję z dowolną ilością argumentów?

Definiujemy funkcję z pustymi nawiasami, bez deklaracji argumentów.  

```php
function emptyArgs(){
    $argsArray = func_get_args();
}
```
a następnie wywołujemy ją, przekazując dowolną ilość argumentów.  
W środku funkcji wywołując funkcję `func_get_args()` otrzymamy tablicę przekazanych argumentów

#### 2. Kiedy funkcja zwraca dane?

Funkcja zwraca dane wtedy, kiedy w jej ciele znajduje się słowo kluczowe `return`.  
Cały kod znajdujący się za `return` to tzw. martwy kod i nie jest wykonywany.  

Szczególnym przypadkiem zwracania danych z funkcji bez `return` jest przekazanie zmiennej przez referencję z użyciem `&`

#### 3. Co to jest referencja?

Referencja to przypisanie do kilku zmiennych wskazania na tą samą wartość (miejsce w pamięci)

#### 4. Czy możemy przekazać wywołanie funkcji jako argument innej funkcji?

```php
echo explode(' ', str_replace('a', 'b', 'Hello world'));
```

Tak, aczkolwiek może zdarzyć się sytuacja, iż pojawi się błąd, że tylko zmienne mogą być przekazywane do funkcji jako argumenty w sytuacji kiedy funkcja np. wbudowana w php przyjmuje argument przez referencję.

#### 5. Jak za pomocą iteracji znaleźć najmniejszy element w tablicy?

```php
$array = [-4, 30, 91, -144, 11, 2];
//musimy użyć zmiennej pomocniczej
$min = 0;//BŁĄD - ta zmienna nie może mieć wartości 0 ponieważ mamy liczby ujemne

$min = $array[0];//ustalenie jako wyjściowej wartości minimalnej pierwszego elementu tablicy jest sposobem najbezpieczeniejszym

//tutaj iterujemy i porównujemy kolejne elementy do aktualnej wartości $min
for($a = 1; $a < count($array); $a++)//iterujemy od indeksu 1 (drugi element) ponieważ pierwszy już pobraliśmy 3 linijki wyżej
{
    $min = $min > $array[$a] ? $array[$a] : $min;
}
```

#### 6. Jak pobrać adres IP osoby wchodzącej na naszą stronę?

Używamy do tego zmiennej superglobalnej:  
```php
echo $_SERVER['REMOTE_ADDR'];
```

#### 7. Jakie funkcje pozwalają nam na walidację danych jakie trafiają od użytkownika?

```php
trim($text);//usuwa białe znaki z początku i końca ciągu
is_array($var);//sprawdza czy zmienna $var jest tablicą i zwraca true lub false
is_int($var);//sprawdza czy zmienna $var jest liczbą całkowitą i zwraca true lub false
is_bool($var);//sprawdza czy zmienna $var jest wartościa logiczną i zwraca true lub false
is_float($var);//sprawdza czy zmienna $var jest liczbą zmiennoprzecinkową i zwraca true lub false
is_string($var);//sprawdza czy zmienna $var jest ciągiem znaków i zwraca true lub false
is_numeric($var);//sprawdza czy zmienna $var liczbą lub ciągiem reprezentującym liczbę i zwraca true lub false
```

```php
$str = '11';

var_dump(is_numeric($str));//true - ciąg reprezentujący liczbę
var_dump(is_int($str));//false - jest to ciąg (string) a nie liczba całkowita (int)
```

#### 8. Czy możemy dołączyć do naszego kodu 2x plik ze stałymi?

Załóżmy plik `config.php`  

```php
define('SOME_CONST',123);
```

gdy spróbujemy go dołączyć do pliku `2` krotnie:  

```php
include('config.php');//ta linia kodu zadziała prawidłowo
include('config.php');//ta spowoduje błąd gdyż php będzie próbowało ponownie zdefiniować stałe a nie jest to możliwe gdyż stałych nie można zmieniać
```