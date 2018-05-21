<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function main(){
        return view('pages.main');
    }
    public function predykcja(){
        return view('pages.predykcja');
    }

}
