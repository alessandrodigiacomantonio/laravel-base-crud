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
  public function getProdotto($string)
  {
    $prodotti = Latticino::all();
    foreach($prodotti as $prodotto)
    {
      if($prodotto['prodotto'] == $string) return $prodotto;
    }
  }
}
