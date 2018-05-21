<?php

namespace App\Http\Controllers;



use Request;
use App\Http\Requests;
use App\Posts as Posts;
use App\Person;
use DB;

class PeopleController extends Controller
{



   public function dodaj(){
       return view('pages.dodaj');
   }

    /**
     * Wyciąga z formularza dane i zapisuje w bazie
     */
    public function store(){



        /// przekazanie z formularza danych do zmiennych
       $wiek= Request::get('wiek');
       $plec= Request::get('plec');
       $odleglosc= Request::get('odleglosc');
       $wlasny_samochod= Request::get('wlasny_samochod');
       $wyksztalcenie= Request::get('wyksztalcenie');
       $dochod= Request::get('dochod');
       $pojazd_id= Request::get('pojazd_id');

       //sprawdzanie za pomocą funkcji do jakiej liczby dopasować do wymyslonego przez nas klucza

       $wiek = $this->sprawdz_wiek($wiek);
       $odleglosc = $this->sprawdz_odleglosc($odleglosc);
       $dochod = $this->sprawdz_dochod($dochod);

       ///zapytanie zapisujące dane w bazie
        ///
       DB::table('people')->insert( array('wiek' => $wiek, 'plec' => $plec,'odleglosc' => $odleglosc,
           'wlasny_samochod' => $wlasny_samochod, 'wyksztalcenie' => $wyksztalcenie, 'dochod' => $dochod,
           'pojazd_id' => $pojazd_id+1));
       return 'Poszło';
   }


   //
    public function sprawdz_wiek($wiek2){
        if($wiek2 <=10) return 0;
        if($wiek2 <=15) return 1;
        if($wiek2 <=20) return 2;
        if($wiek2 <=25) return 3;
        if($wiek2 <=30) return 4;
        if($wiek2 <=40) return 5;
        if($wiek2 <=50) return 6;
        if($wiek2 <=60) return 7;
        if($wiek2 <=80) return 8;
        if($wiek2 <=100)return 9;
        if($wiek2 >100)  return 10;
        else return 0;

    }
    public function sprawdz_odleglosc($odl2){
        if($odl2 <=1) return 0;
        if($odl2 <=5) return 1;
        if($odl2 <=10) return 2;
        if($odl2 <=30) return 3;
        if($odl2 <=100) return 4;
        if($odl2 <=250) return 5;
        if($odl2 <=500) return 6;
        if($odl2 <=1000) return 7;
        if($odl2 <=5000) return 8;
        if($odl2 <=10000)return 9;
        if($odl2 >10000)  return 10;
        else return 0;

    }
    public function sprawdz_dochod($doch2){
        if($doch2 <=1600) return 1;
        if($doch2 <=3000) return 2;
        if($doch2 <=5000) return 3;
        if($doch2 <=8000) return 4;
        if($doch2 >8000)  return 5;
        else return 0;
    }
}
