@extends('layouts.formation')
@section('content')

<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">SecuLife</h1>
          <p class="lead text-muted">Nous protégeons des vies.
         <strong> Votre sécurité, notre priorité.</strong></p>
          <p>
            <a href="{{ route('login') }}" class="btn btn-danger my-2">Se Connecter</a>
            <a href="{{ route('register') }}" class="btn btn-secondary my-2">S'inscrire</a>
          </p>
        </div>
      </section>

      <div class="album py-4 bg-light">
        <div class="container">

        <div class="row">
        <div class="row">
  @foreach($formations as $formation)
    <div class="col-md-4">
      <div class="card mb-4 box-shadow">
        <a href="{{ route('formation.show', ['id' => $formation->id]) }}" class="text-decoration-none text-dark">
          @if($formation->image)
            <img class="card-img-top" src="{{ asset('storage/images/' . $formation->image) }}" alt="Card image cap">
          @endif
          <div class="card-body">
            <p class="card-text">{{ $formation->titre }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">{{ $formation->created_at }}</small>
            </div>
          </div>
        </a>
      </div>
    </div>
  @endforeach
</div>


        </div>
      </div>
      @endsection