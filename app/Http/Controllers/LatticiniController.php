<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatticiniController extends Controller
{
  public function ricottaIndex()
  {
    return view('latticini.ricotta')
  }
  public function formaggioIndex()
  {
    return view('latticini.formaggio')
  }
  public function pannaIndex()
  {
    return view('latticini.panna')
  }
  public function yogurtIndex()
  {
    return view('latticini.yogurt')
  }
  public function burroIndex()
  {
    return view('latticini.burro')
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
      return redirect()->route('latticino.'.$nuovoProdotto['prodotto']);
    }
    else
    {
      return redirect()->route('latticino.nuovo_prodotto');
    }
  }
}
