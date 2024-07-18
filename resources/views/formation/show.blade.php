@extends('layouts.formation')

@section('content')
<div class="container py-4">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card mb-4 box-shadow">
        @if($formation->image)
          <img class="card-img-top" src="{{ asset('storage/images/' . $formation->image) }}" alt="Card image cap">
        @endif
        
      </div>
      <div class="blog-post">
        <h2 class="blog-post-title text-justify">{{ $formation->titre }}</h2>
        <p class="blog-post-meta">{{ $formation->created_at }} par <a href="#">SecuLife</a></p>
        <p class='text-justify'>{{ $formation->contenu }}</p>
      </div>
    </div>
  </div>
</div>
@endsection
