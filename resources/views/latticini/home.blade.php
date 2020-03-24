@extends('layout')
@section('main')
  <section class="main__section">
    <img class="main__section__img" src="https://www.fondazioneveronesi.it/uploads/thumbs/2020/01/16/xlatte-latticini-dieta_thumb_720_480.jpg.pagespeed.ic.geJLYkc3-Q.jpg" alt="Immagine Latticini">
    <h2 class="main__title">I Latticini</h2>
    <p class="main__txt">
      Il termine latticini (singolare latticìnio, dal latino lacticinium) ha due significati, uno più generico e uno più restrittivo. In senso generico sono latticini tutti gli alimenti derivanti dal latte, ottenuti secondo i procedimenti più vari; tra essi si comprendono quindi la ricotta, i formaggi freschi e stagionati, il burro, la panna e lo yogurt.
    </p>
    <p class="main__txt">
      In senso più restrittivo, i latticini sono soltanto i derivati del latte che non subiscono la coagulazione delle caseine, come la ricotta, il burro, la panna e lo yogurt. In questa definizione il formaggio non è un latticinio, anzi si contrappone a quest'ultimo.
    </p>
  </section>
  <section class="main__section">
    <h3 class="main__subtitle">Prodotti</h3>
    <p class="main__txt">
      Tra i prodotti caseari più diffusi vi sono formaggio, ricotta, burro, yogurt, panna e crema.
    </p>
    <p class="main__txt">
      Il <a href="{{ route('latticini.prodotto', 'formaggio') }}">formaggio</a> è ottenuto tramite coagulazione della parte proteica del latte (caseina) e della parte grassa per mezzo del caglio; si distinguono tra essi i formaggi freschi e i formaggi stagionati. Il formaggio, ai fini della legge italiana, non è un latticino.
    </p>
    <p class="main__txt">
      La <a href="{{ route('latticini.prodotto', 'ricotta') }}">ricotta</a> si ottiene come residuo della produzione del formaggio dalla cagliata ovvero come parte del siero del latte.
    </p>
    <p class="main__txt">
      Il <a href="{{ route('latticini.prodotto', 'burro') }}">burro</a> è prodotto dalla lavorazione della panna (o crema di latte), con formazione di un'emulsione.
    </p>
    <p class="main__txt">
      Lo <a href="{{ route('latticini.prodotto', 'yogurt') }}">yogurt</a> viene realizzato per fermentazione batterica degli zuccheri presenti nel latte.
    </p>
    <p class="main__txt">
      La <a href="{{ route('latticini.prodotto', 'panna') }}">panna</a> è costituita dalla parte grassa del latte, ottenuta per centrifugazione o per affioramento in seguito a decantazione lenta.
    </p>
    <p class="main__txt">
      Si considera latticinio anche il <a href="">kéfir</a>.
    </p>
  </section>
@endsection
