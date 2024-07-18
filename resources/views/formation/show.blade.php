@extends('layouts.client')

@section('content')
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            
        
                <a href="{{ route('formations.index') }}" class="btn btn-secondary">Retour aux formations</a>
            
            <h1 class="fw-light">
                {{ $formation->titre }}
            </h1>
            <p class="lead text-body-secondary">
                {{ $formation->contenu }}
            </p>
           

            @if($formation->video)
            <p>
                <video width="100%" controls>
                    <source src="{{ asset('storage/videos/' . $formation->video) }}" type="video/mp4" >
                    Your browser does not support the video tag.
                </video>
            </p>
            @endif
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
    border-radius: 10px;
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    transform: translateY(-10px);
}

.card-title {
    font-weight: bold;
    font-size: 1.5rem;
    color: #333;
}

.card-text {
    color: #666;
    margin-bottom: 15px;
}

.card img {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
}
</style>
@endsection
