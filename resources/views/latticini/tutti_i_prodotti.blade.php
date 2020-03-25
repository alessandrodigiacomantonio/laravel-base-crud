@extends('layout')
@section('main')
  <ul class="main__list">
    @foreach ($prodotti as $prodotto)
      <li class="main__list__product">
        <a class="main__list__product__content">
          <img class="main__list__product__content__img" src="{{ $prodotto['url_img'] }}" alt="immagine {{ $prodotto['prodotto'] }}">
          <h3 class="main__list__product__content__name">{{ $prodotto['prodotto'] }}</h3>
          <form class="main__list__product__content__delete" action="{{ route('latticini.cancella_prodotto', $prodotto['prodotto']) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Cancella">
          </form>
        </a>
      </li>
    @endforeach
  </ul>
@endsection
