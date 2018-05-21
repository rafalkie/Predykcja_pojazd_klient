<?php

namespace App\Http\Controllers;



use Request;
use App\Http\Requests;
use App\Posts as Posts;
use App\Person;
use DB;
class PredykcjaController extends Controller
{
    public function predykcja(){

        return view('pages.predykcja');
    }

    /**
     *
     */
    public function store(){
        $sprawdz = new PeopleController ;
        $autobus=0;
        $pociag=0;
        $taxi=0;
        $samolot=0;
        $samochod=0;
        $suma=0;


        /// przekazanie z formularza danych do zmiennych
        $wiek= Request::get('wiek');
        $plec= Request::get('plec');
        $odleglosc= Request::get('odleglosc');
        $wlasny_samochod= Request::get('wlasny_samochod');
        $wyksztalcenie= Request::get('wyksztalcenie');
        $dochod= Request::get('dochod');

        //sprawdzanie za pomocą funkcji do jakiej liczby dopasować do wymyslonego przez nas klucza

        $wiek = $sprawdz->sprawdz_wiek($wiek);
        $odleglosc = $sprawdz->sprawdz_odleglosc($odleglosc);
        $dochod = $sprawdz->sprawdz_dochod($dochod);


        ////Liczymy ile osób posiada identyczny parametr

        $param[1] = $wiek;
        $param[2] = $plec;
        $param[3] = $odleglosc;
        $param[4] = $wlasny_samochod;
        $param[5] = $wyksztalcenie;
        $param[6] = $dochod;

        $param2[1] = 'wiek';
        $param2[2] = 'plec';
        $param2[3] = 'odleglosc';
        $param2[4] = 'wlasny_samochod';
        $param2[5] = 'wyksztalcenie';
        $param2[6] = 'dochod';


        //pętla gdzie sprawdzamy kazdy parametr wiek itp. dla kazdego pojazdu czy jest tkai sam i zliczamy
        for($i=1; $i <=6; $i++)
        {
            $suma+=  DB::table('people')->where($param2[$i],$param[$i])->count();

            $samochod += DB::table('people')->where( 'pojazd_id',1)->where($param2[$i],$param[$i])->count();
            $taxi += DB::table('people')->where( 'pojazd_id',2)->where($param2[$i],$param[$i])->count();
            $autobus += DB::table('people')->where( 'pojazd_id',3)->where($param2[$i],$param[$i])->count();
            $pociag += DB::table('people')->where( 'pojazd_id',4)->where($param2[$i],$param[$i])->count();
            $samolot += DB::table('people')->where( 'pojazd_id',5)->where($param2[$i],$param[$i])->count();




        }
        /// sprawdza zeby nie dzielic przez zero
        if($samochod!=0) $samochod=($samochod/$suma)*100;
        if($autobus!=0) $autobus=($autobus/$suma)*100;
        if($pociag!=0) $pociag=($pociag/$suma)*100;
        if($taxi!=0) $taxi=($taxi/$suma)*100;
        if($samolot!=0) $samolot=($samolot/$suma)*100;
        echo 'autobys =',$autobus , ' % pociag =',$pociag,' % taxt =',$taxi,' % samolot =',$samolot,' % samochod=', $samochod,' %';
    }

}
