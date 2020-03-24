<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Latticino;

class LatticiniController extends Controller
{
  public function prodottoIndex($prodotto)
  {
    $prodotto = $this->getProdotto($prodotto);
    return view('latticini.prodotto', compact('prodotto'));
  }

  public function nuovoProdotto(Request $request)
  {
    $nuovoProdotto = $request->all();
    $latticino = new Latticino;
    $latticino->prodotto = $nuovoProdotto['prodotto'];
    $latticino->url_img = $nuovoProdotto['url_img'];
    $latticino->descrizione = $nuovoProdotto['descrizione'];
    $nuovoProdottoSalvato = $latticino->save();
    if($nuovoProdottoSalvato)
    {
      return redirect()->route('latticini.prodotto', $nuovoProdotto['prodotto']);
    }
    else
    {
      return redirect()->route('latticini.nuovo_prodotto');
    }
  }
  public function tuttiProdottiIndex()
  {
    $prodotti = Latticino::all();
    return view('latticini.tutti_i_prodotti', compact('prodotti'));
  }
  public function cancellaProdotto(Request $request, $prodotto)
  {
    $calogero = Latticino::all();
    foreach($calogero as $propappio)
    {
      if ($propappio->prodotto != 'burro' && $propappio->prodotto != 'formaggio' && $propappio->prodotto != 'panna' && $propappio->prodotto != 'yogurt' && $propappio->prodotto != 'ricotta')
      {
          if ($propappio->prodotto == $prodotto) $propappio->delete();
      }
    }
    return redirect()->route('latticini.tutti_i_prodotti');
  }
  public function getProdotto($string)
  {
    $prodotti = Latticino::all();
    foreach($prodotti as $prodotto)
    {
      if($prodotto['prodotto'] == $string) return $prodotto;
    }
  }
}
