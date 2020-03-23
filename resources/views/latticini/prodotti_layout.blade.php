@extends('layout')
@section('main')
  <div class="main__content">
    <img class="main__content__img" src="{{ $prodotto['url_img'] }}" alt="immagine {{ $prodotto['prodotto'] }}">
    <div class="main__content__txt">{{ $prodotto['descrizione'] }}</div>
  </div>
@endsection
