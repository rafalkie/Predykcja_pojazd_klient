<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'PagesController@main');
Route::get('/predykcja', 'PredykcjaController@predykcja');
Route::post('/predykcja', 'PredykcjaController@store');
Route::get('/wynik', 'PredykcjaController@store');

Route::get('/dodaj', 'PeopleController@dodaj');
Route::post('/dodaj', 'PeopleController@store');



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
