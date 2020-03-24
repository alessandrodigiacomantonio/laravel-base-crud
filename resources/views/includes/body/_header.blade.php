@php
  use App\Latticino;
  $latticini = Latticino::all();
@endphp
<header class="header">
  <nav class="header__navbar">
    <a class="header__navbar__home" href="{{ route('latticini.home') }}">
      Latticini
    </a>
    @foreach ($latticini as $latticino)
      <a class="header__navbar__link" href="{{ route('latticini.'.$latticino['prodotto']) }}">{{$latticino['prodotto']}}</a>
    @endforeach
    <a class="header__navbar__link" href="{{ route('latticini.nuovo_prodotto') }}">Nuovo Prodotto</a>
  </nav>
</header>
