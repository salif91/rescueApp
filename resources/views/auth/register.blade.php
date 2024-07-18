<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input[type="text"],
        .input-group input[type="email"],
        .input-group input[type="password"],
        .input-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .actions {
            margin-top: 20px;
        }

        .actions a {
            display: block;
            margin-bottom: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .actions button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .actions button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <img src="{{ asset('storage/images/SecuLife.jpg') }}" alt="SecuLife" style="width: 150px; margin-bottom: 20px;">
        <h2>Inscription</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Nom -->
            <div class="input-group">
                <label for="name">Nom</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @if ($errors->has('name'))
                    <span class="error">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <!-- Adresse e-mail -->
            <div class="input-group">
                <label for="email">Adresse e-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <!-- Mot de passe -->
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <!-- Confirmation du mot de passe -->
            <div class="input-group">
                <label for="password_confirmation">Confirmation du mot de passe</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                @if ($errors->has('password_confirmation'))
                    <span class="error">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
            <!-- Choix du rôle -->
            <div class="input-group">
                <label for="role">Choix du rôle</label>
                <select id="role" name="role" required>
                    <option value="rescuer">Secouriste</option>
                    <option value="client">Client</option>
                </select>
                @if ($errors->has('role'))
                    <span class="error">{{ $errors->first('role') }}</span>
                @endif
            </div>
            <!-- Inscription -->
            <div class="actions">
                <a href="{{ route('login') }}">Déjà inscrit?</a>
                <button type="submit">S'inscrire</button>
            </div>
        </form>
    </div>
</body>
</html>
