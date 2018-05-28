# Predykcja_pojazd_klient
Aplikacje Internetowe II




Temat projektu: Aplikacja do predykcji i wizualizacji zachowania klientów

Opiekun projektu: dr inż. Piotr Lasek

Autorzy Projektu: Rafał Kieroński, Jakub Kuśnierz, Lucjan Kuźniar

Data wykonania: Semestr letni rok akademicki 2017/2018


## Opis aplikacji:
Aplikacja przewidująca wybór środka transportu potencjalnego klienta .

Na podstawie stworzonej przez nas bazy danych przewiduje zachowanie nowych klientów .

Baza zawiera czynniki które wspomogą predykcje m.in. (wiek , płeć, odległość do przebycia ,własny samochód czy posiada osoba , wykształcenie, wysokość dochodów ).

Środki transportu które bierzemy pod uwagę: samochód , autobus , taxi , samolot, pociąg.

## Funkcjonalności:
o	Logowanie 

o	Dodawanie nowych klientów do bazy

o	Predykcja wyboru środka transportu nowych klientów na podstawie danych historycznych

## Użyte technologie
o PHP , MySQL.

o framework  Laravel, Bootstrap.

o Google Chart libraries

## Tabela konwersji wartości z formularza predykcji do bazy danych

![przechwytywanie](https://user-images.githubusercontent.com/26554041/40628411-29458f40-62c5-11e8-92fb-2aec67b98e59.PNG)

1.Liczby w nawiasach to wartości które podajemy w formularzu.

2.Liczby przed dwukropkiem to liczby które są odpowiednikiem w bazie danych

## Działanie algorytmu:

1.Krok

Najpierw liczymy sumę rekordów które znajdują się w bazie i są równe z tymi którymi podaliśmy w formularzu .

```
$suma+=  DB::table('people')->where($param2[$i],$param[$i])->count();
```

2.Krok

Następnie liczymy dla każdego z pojazdów sumę gdzie występuje ta sama wartość np. wiek .

```
$samochod += DB::table('people')->where( 'pojazd_id',1)->where($param2[$i],$param[$i])->count();
```

3.Krok

Zabezpieczamy jeszcze przed dużym wynikiem procentowym samolotu gdy wartość z bazy jest mniejsza niż 5 czyli do 250 km to procent samolotu jest dzielony przez 4 . Wtedy cześć procentową dostają pozostałe środki transportu.
```
if ($odleglosc < 5) {                   /// Jeżeli odległość mniejsza od 5 a tu według naszej skali to 100 km to dzieli procenty predykcji samolotu przez 5
    $samolotPom = (($samolot / $suma) * 100) / 4;
    $samolot = 0;
    $samochod += $samolotPom;
    $autobus += $samolotPom;
    $pociag += $samolotPom;
    $taxi += $samolotPom;
} else {
    $samolot = (($samolot / $suma) * 100);
}
```

Podobnie jest z wynikiem procentowym samochodu gdy w formularzu osoba zaznaczy brak posiadania samochodu .

```
if ($wlasny_samochod == 0) {            /// Jeżeli nie posiada samochodu nie jest liczony procent dla samochodu
    ///
    $samochod = $samochod / 4;
    $samolot += $samochod;
    $autobus += $samochod;
    $pociag += $samochod;
    $taxi += $samochod;
   ```

5.Krok

Następnie dzielimy wartość z pierwszego kroku przez wartość z drugiego kroku i mnożymy całość przez 100 .
```
$samolot=(($samolot/$suma)*100);
```

## Encja bazy danych

![ddde](https://user-images.githubusercontent.com/26554041/40628570-15c85b18-62c6-11e8-896e-5373f8cb6ead.png)



