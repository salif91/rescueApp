@extends('layouts.formation')

@section('content')
<div class="container py-4">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <h2>Modifier la Formation</h2>
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <form action="{{ route('formation.update', ['id' => $formation->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="titre" class="form-label">Titre</label>
          <input type="text" class="form-control" id="titre" name="titre" value="{{ $formation->titre }}" required>
        </div>
        <div class="mb-3">
          <label for="contenu" class="form-label">Contenu</label>
          <textarea class="form-control" id="contenu" name="contenu" rows="5" required>{{ $formation->contenu }}</textarea>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input type="file" class="form-control" id="image" name="image">
          @if($formation->image)
            <div class="mt-2">
              <img src="{{ asset('storage/images/' . $formation->image) }}" alt="Image" class="img-thumbnail" width="150">
            </div>
          @endif
        </div>
        <div class="mb-3">
          <label for="video" class="form-label">Video</label>
          <input type="file" class="form-control" id="video" name="video">
          @if($formation->video)
            <div class="mt-2">
              <video width="320" height="240" controls>
                <source src="{{ asset('storage/videos/' . $formation->video) }}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          @endif
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
    </div>
  </div>
</div>
@endsection
