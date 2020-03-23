@extends('layout')
@section('main')
  <form class="main__form" action="{{ route('latticini.post.nuovo_prodotto') }}" method="post">
    @csrf
    @method('POST')
    <input type="text" name="prodotto" placeholder="Nome Prodotto">
    <input type="text" name="url_img" placeholder="URL Immagine">
    <textarea rows="5" name="descrizione" placeholder="Descrizione Prodotto"></textarea>
    <input type="submit" value="Nuovo Prodotto">
  </form>
@endsection
