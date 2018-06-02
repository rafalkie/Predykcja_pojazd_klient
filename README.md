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
o	Logowanie , Rejestracja 

o	Dodawanie nowych klientów do bazy

o	Predykcja wyboru środka transportu nowych klientów na podstawie danych historycznych

## Użyte technologie
o PHP , MySQL.

o framework  Laravel, Bootstrap.

o Google Chart libraries

## Tabela konwersji wartości z formularza predykcji do bazy danych

![przechwytywanie](https://user-images.githubusercontent.com/26554041/40879559-3f7beb0c-66a2-11e8-9539-3ab8b2e73f3d.PNG)

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
if ($odleglosc < 5) {                  
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
if ($wlasny_samochod == 0) {            
   
    $samochod = $samochod / 4;
    $samolot += $samochod;
    $autobus += $samochod;
    $pociag += $samochod;
    $taxi += $samochod;
   ```
Również dochód gdy jest mniejszy niż 1600 zł zmniejszamy procent taxi o 1/5

```
if ($dochod < 2) {            
            ///
            $taxi = $taxi / 5;
            $samolot += $taxi;
            $autobus += $taxi;
            $pociag += $taxi;
            $samochod += $taxi;

        }
   ```
5.Krok

Następnie dzielimy wartość z pierwszego kroku przez wartość z drugiego kroku i mnożymy całość przez 100 .
```
$samolot=(($samolot/$suma)*100);
```
## Baza danych

Export bazy danych znajdziemy w zaznaczonym na żółto pliku.

![przechwytywanie](https://user-images.githubusercontent.com/26554041/40630055-9a271ef4-62cf-11e8-953c-c196fa07517a.PNG)


## Encja 

![ddde](https://user-images.githubusercontent.com/26554041/40628570-15c85b18-62c6-11e8-896e-5373f8cb6ead.png)

## Logowanie do aplikacji

![zaloguj](https://user-images.githubusercontent.com/26554041/40630117-246a3f4c-62d0-11e8-93fa-38565b487447.PNG)

W bazie danych zostało utworzone konto.

Login: rafalkie2@gmail.com

hasło: user123

## Toturial dla użytkownika

Jeżeli chcemy polepszyć wyniki predykcji dodajemy kolejne osoby do bazy poprzez kliknięcie w przycisk dodaj osobe.
Następnie wypełniamy formularz i zatwierdźamy niebieskim przyciskiem "Dodaj osobe".  

![dodaj](https://user-images.githubusercontent.com/26554041/40629909-7ac90366-62ce-11e8-8620-5519af80334d.PNG)

Predykcje środka transportu wykonujemy poprzez klikniecie w przycisk "Predykcja" , następnie wypełniamy poprawnie formularz i zatwierdźamy przyciskiem "Sprawdź".

![predykcja](https://user-images.githubusercontent.com/26554041/40629908-7986fa58-62ce-11e8-88ef-62016ff61600.PNG)

Wynik procentowy  dostajemy w wykresie kołowym. 
![proc](https://user-images.githubusercontent.com/26554041/40629905-77e886bc-62ce-11e8-8f2e-3517d80966d8.PNG)





