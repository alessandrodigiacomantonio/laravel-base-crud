<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Latticino;

class LatticiniController extends Controller
{
  public function ricottaIndex()
  {
    $prodotto = $this->getProdotto('ricotta');
    return view('latticini.ricotta', compact('prodotto'));
  }
  public function formaggioIndex()
  {
    $prodotto = $this->getProdotto('formaggio');
    return view('latticini.formaggio', compact('prodotto'));
  }
  public function pannaIndex()
  {
    $prodotto = $this->getProdotto('panna');
    return view('latticini.panna', compact('prodotto'));
  }
  public function yogurtIndex()
  {
    $prodotto = $this->getProdotto('yogurt');
    return view('latticini.yogurt', compact('prodotto'));
  }
  public function burroIndex()
  {
    $prodotto = $this->getProdotto('burro');
    return view('latticini.burro', compact('prodotto'));
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
      return redirect()->route('latticini.'.$nuovoProdotto['prodotto']);
    }
    else
    {
      return redirect()->route('latticini.nuovo_prodotto');
    }
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
