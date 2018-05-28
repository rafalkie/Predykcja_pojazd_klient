<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'wiek', 'plec', 'odleglosc','wlasny_samochod','wyksztalcenie','dochod','pojazd_id'
    ];
}
