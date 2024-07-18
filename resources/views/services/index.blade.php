<!-- resources/views/services/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
        }

        .container {
            margin-top: 50px;
        }

        .service-button {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-custom {
            background-color: white;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: black;
        }

        .navbar-custom .nav-link:hover {
            color: #ffdd57;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
    <img src="{{ asset('storage/images/SecuLife.jpg') }}" alt="SecuLife" style="height: 100px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Connexion</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1 class="mb-4">Liste des Services</h1>
        <div class="list-group">
            @foreach ($services as $service)
                <div class="service-button btn btn-secondary">
                    {{ $service['name'] }}
                    <a href="tel:{{ $service['number'] }}" class="btn btn-danger">{{ $service['number'] }}</a>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
