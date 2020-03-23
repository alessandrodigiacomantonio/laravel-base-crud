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
}
