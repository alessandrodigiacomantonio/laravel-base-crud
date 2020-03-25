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
Route::post('/latticini/nuovo_prodotto', 'LatticiniController@nuovoProdotto')->name('latticini.post.nuovo_prodotto');

Route::get('/latticini/{prodotto}', 'LatticiniController@prodottoIndex')->name('latticini.prodotto');

Route::get('/latticini/tutti_i_prodotti', 'LatticiniController@tuttiProdottiIndex')->name('latticini.tutti_i_prodotti');
Route::delete('/latticini/prodotti/tutti_i_prodotti/{prodotto}', 'LatticiniController@cancellaProdotto')->name('latticini.cancella_prodotto');
