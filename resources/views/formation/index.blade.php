
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>SecuLife</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/dist/css/album.css" rel="stylesheet">
    
    <style>
  .card-img-top {
    height: 200px; /* Vous pouvez ajuster cette valeur selon vos besoins */
    object-fit: cover;
  }
  .card-body {
    height: 150px; /* Ajustez cette valeur pour obtenir la même hauteur pour toutes les cartes */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
</style>

  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">SecuLife</h4>
              <p class="text-muted">Nous protegeons des vies - Votre sécurité, notre priorité.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Facebook</a></li>
                <li><a href="#" class="text-white">Email</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>SecuLife</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

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
  @foreach($formations as $formation)
    <div class="col-md-4">
      <div class="card mb-4 box-shadow">
        @if($formation->image)
          <img class="card-img-top" src="{{ asset('storage/images/' . $formation->image) }}" alt="Card image cap">
        @endif
        <div class="card-body">
          <p class="card-text">{{ $formation->titre }}</p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">{{ $formation->created_at }}</small>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>

        </div>
      </div>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/dist/js/jquery-slim.min.js"><\/script>')</script>
    <script src="/dist/js/vendor/popper.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/dist/js/vendor/holder.min.js"></script>
  </body>
</html>
