<?php

namespace App\Http\Controllers;



use App\Http\Requests\WykonajPredykcjeRequest;
use Request;
use App\Http\Requests;
use App\Posts as Posts;
use App\Person;
use DB;
class PredykcjaController extends Controller
{
    public function predykcja()
    {

        return view('pages.predykcja');
    }

    /**
     *
     */
    public function store(WykonajPredykcjeRequest $request)
    {
        $sprawdz = new PeopleController;
        $autobus = 0;
        $pociag = 0;
        $taxi = 0;
        $samolot = 0;
        $samolotPom = 0;
        $samochod = 0;
        $suma = 0;


        /// przekazanie z formularza danych do zmiennych
        $wiek = $request->get('wiek');
        $plec = Request::get('plec');
        $odleglosc = $request->get('odleglosc');
        $wlasny_samochod = Request::get('wlasny_samochod');
        $wyksztalcenie = Request::get('wyksztalcenie');
        $dochod = $request->get('dochod');

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

        for ($i = 1; $i <= 6; $i++) {

            $suma += DB::table('people')->where($param2[$i], $param[$i])->count();
            $samochod += DB::table('people')->where('pojazd_id', 1)->where($param2[$i], $param[$i])->count();
            $taxi += DB::table('people')->where('pojazd_id', 2)->where($param2[$i], $param[$i])->count();
            $autobus += DB::table('people')->where('pojazd_id', 3)->where($param2[$i], $param[$i])->count();
            $pociag += DB::table('people')->where('pojazd_id', 4)->where($param2[$i], $param[$i])->count();
            $samolot += DB::table('people')->where('pojazd_id', 5)->where($param2[$i], $param[$i])->count();

        }
        /// sprawdza zeby nie dzielic przez zero
        if ($samochod != 0) $samochod = ($samochod / $suma) * 100;
        if ($autobus != 0) $autobus = ($autobus / $suma) * 100;
        if ($pociag != 0) $pociag = ($pociag / $suma) * 100;
        if ($taxi != 0) $taxi = ($taxi / $suma) * 100;
        if ($samolot != 0) {
            if ($odleglosc < 5) {                   /// Jeżeli odległość mniejsza od 5 a tu według naszej skali to 100 km to dzieli procenty predykcji samolotu przez 5
                $samolotPom = (($samolot / $suma) * 100) / 5;
                $samolot = $samolotPom;
                $samochod += $samolotPom;
                $autobus += $samolotPom;
                $pociag += $samolotPom;
                $taxi += $samolotPom;
            } else {
                $samolot = (($samolot / $suma) * 100);
            }
        }
        if ($wlasny_samochod == 0) {            /// Jeżeli nie posiada samochodu dopiero wtedy jest liczony procent
            ///
            $samochod = $samochod / 4;
            $samolot = $samochod;
            $autobus += $samochod;
            $pociag += $samochod;
            $taxi += $samochod;
            $samochod = 0;
        }
        return view('pages.wynik',compact('autobus','pociag','taxi','samolot','samochod'));
}





}
