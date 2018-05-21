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
     * @return mixed
     */
    public function store(){
       $wiek= Request::get('wiek');
       $plec= Request::get('plec');
       $odleglosc= Request::get('odleglosc');
       $wlasny_samochod= Request::get('wlasny_samochod');
       $wyksztalcenie= Request::get('wyksztalcenie');
       $dochod= Request::get('dochod');
       $pojazd_id= Request::get('pojazd_id');


       DB::table('people')->insert( array('wiek' => $wiek, 'plec' => $plec,'odleglosc' => $odleglosc,
           'wlasny_samochod' => $wlasny_samochod, 'wyksztalcenie' => $wyksztalcenie, 'dochod' => $dochod,
           'pojazd_id' => $pojazd_id));
       return 'Poszło';
   }
}
