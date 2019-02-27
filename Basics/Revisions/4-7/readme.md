# Podstawy PHP - zadania domowe
> Wszystkie zadania rozwiązuj w przygotowanych do tego plikach.

>Zadania z dopiskiem "dodatkowe" są dla chętnych

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1

Napisz funkcję `textStats($text)`, która wyliczy statystyki dla podanego ciągu znaków.

1. Funkcja ma przyjmować jedynie teksty o długości minimum `1000` znaków, w przypadku krótszego tekstu funkcja ma **zwrócić** `false`
2. Funkcja powinna wyliczyć statystyki i **zwrócić** je w formie tablicy o odpowiednich kluczach:  
   * `words` -  ilość słów w ciągu
   * `chars` - ilość znaków w ciągu
   * `numbers` - ilość cyfr w ciągu
3. Zakładamy, że ciąg nie posiada polskich znaków i jest pisany w języku angielskim.

#### Zadanie 2

Napisz funkcję `maxLength($text)`, która znajdzie najdłuższe słowo w ciągu.

1. Funkcja ma przyjąć tekst o długości minimum `500` znaków, w przypadku krótszego tekstu funkcja ma **zwrócić** `false`
2. Funkcja powinna **zwrócić** liczbę całkowitą będącą długością najdłuższego wyrazu w ciągu.
3. Zakładamy, że ciąg nie posiada polskich znaków i jest pisany w języku angielskim.

#### Zadanie 3

Napisz funkcję `temps($array)`, która otrzyma jako argument tablicę pomiarów temperatur z całego tygodnia.

1. Funkcja ma przyjąć tablicę, w przypadku przekazania zmiennej nie będącej tablicą ma **zwrócić** `false`
2. Elementy przekazanej tablicy powinny posiadać klucze:  
   * `measurement` - wartość w stopniach celsjusza z `2` cyframi dziesiętnymi
   * `date` - data w formacie `dd.mm.rr gg:mm:ss`
3. Funkcja w pierwszej kolejności powinna sprawdzić czy w przekazanej tablicy nie ma pomiarów gdzie `measurement` jest równe `null`, jeśli tak to usunąć taki indeks
4. Następnie przygotuj w funkcji zmienną `result` - tablicę, do której dodasz przeliczone wyniki i którą **zwróci** funkcja
5. Tablica powinna zawierać następujące klucze:  
   * `avg` - średnia temperatura z dokładnością `2` miejsc dziesiętnych
   * `maxTemp` - największa zmierzona temperatura z dokładnością `2` miejsc dziesiętnych
   * `minTemp` - najmniejsza zmierzona temperatura z dokładnością `2` miejsc dziesiętnych
   * `lastMeasureFromNow` - zwraca liczbę całkowitą pełnych dni jakie minęły do aktualnego czasu od czasu ostatniego pomiaru. Pomiary mogą być przekazane do tablicy w sposób nie chronologiczny, uważaj na to.
   * `ip` - adres `IP` pobrany ze zmiennej superglobalnej

#### Zadanie 4

Napisz funkcję `countDomains($array)`, która otrzyma jako argument tablicę adresów internetowych.

1. Funkcja ma przyjąć tablicę, w przypadku przekazania zmiennej nie będącej tablicą ma **zwrócić** `false`
2. Adresy powinny być przekazane w formacie `http://www.domena.tld` np. `http://www.mysweden.se`, `http://www.gmail.com` itd.
3. Funkcja ma usunąć z każdego adresu przedrostek `www`
4. Dodatkowo funkcja ma sprawdzić czy domeny się powtarzają i usunąć duplikaty
5. Funkcja ma **zwrócić** ilość domen (jako liczba całkowita), których nazwa ma co najmniej 3 znaki i rozpoczyna się na `g`

#### Zadanie 5 - dodatkowe

Napisz funkcję `postNotification($notified, $weight)`, która **zwróci** datę kiedy maksymalnie powinniśmy odebrać list z poczty.

1. Funkcja jako pierwszy argument otrzymuje datę w formacie `RRRR-MM-DD` i jako drugi wagę w gramach.
2. Listy mają daty końcowe odbioru zależne od wagi:  
   * `<= 100` - odbiór `6` dni od pozostawienia
   * `<= 500` - odbiór `14` dni od pozostawienia
   * `<= 1000` - odbiór `30` dni od pozostawienia
   * `> 1000` - odbiór `35` dni od pozostawienia
3. Funkcja powinna **zwrócić** ostateczną datę odbioru w formacie `DD.MM YYYY`

Przykład:
```php
postNotification('2016-10-09', 80);
//zwraca
//15.10 2016
```

#### Zadanie 6 - dodatkowe

Napisz funkcję `scheduledDelivery($shipped, $weight, $postCode, $service)`, która obliczy planowaną datę doręczenia przesyłki.

1. Funkcja jako argumenty przyjmuje:  
   * `$shipped` - data nadania w formacie `RRRR-MM-DD`
   * `$weight` - waga w kilogramach
   * `$postCode` - kod doręczenia przesyłki w formacie `xx-xxx`
   * `$service` - typ usługi:  
     * `fastInsured` - doręczenie następnego dnia
     * `fast` - doręczenie następnego dnia po godzinie `19:00`
     * `normal` - doręczenie za `3` dni, nie wliczając dnia nadania
     * `slow` - doręczenie za `7` dni
2. Funkcja powinna obliczyć czas planowanego doręczenia paczki.
3. Po obliczeniu wyjściowego czasu nadania na podstawie usługi będziemy modyfikować ten czas w zależności od czynników
4. Jeśli nadanie ma miejsce w sobotę lub niedzielę, czas doręczenia liczymy od najbliższego poniedziałku
5. Jeśli pierwszy człon kodu pocztowego jest liczbą parzystą, czas doręczenia zwiększa się o `2` dni.
6. Jeśli waga jest większa niż `30` kg, całkowity czas doręczenia (z ewentualnym dodaniem dni z pkt. 5) zwiększa się dwukrotnie
7. Funkcja ma **zwrócić** planowaną datę doręczenia przesyłki w formacie `dd.mm.rrrr`
