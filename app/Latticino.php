<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latticino extends Model
{
  protected $table = 'latticini';
  protected $fillable = [
    'prodotto',
    'descrizione',
    'url_img',
  ];
}
