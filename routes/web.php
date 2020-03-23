<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/latticini', function () {
    return view('latticini.home');
})->name('latticini.home');
Route::get('/latticini/nuovo_prodotto', function () {
  return view('latticini.nuovo_prodotto');
})->name('latticini.nuovo_prodotto');
Route::get('/latticini/burro', 'LatticiniController@burroIndex')->name('latticini.burro');
Route::get('/latticini/formaggio', 'LatticiniController@formaggioIndex')->name('latticini.formaggio');
Route::get('/latticini/yogurt', 'LatticiniController@yogurtIndex')->name('latticini.yogurt');
Route::get('/latticini/panna', 'LatticiniController@pannaIndex')->name('latticini.panna');
Route::get('/latticini/ricotta', 'LatticiniController@ricottaIndex')->name('latticini.ricotta');
Route::post('/latticini/nuovo_prodotto', 'LatticiniController@nuovoProdotto')->name('latticini.post.nuovo_prodotto');
