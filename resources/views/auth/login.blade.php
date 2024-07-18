<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .login-container {
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

        .input-group input[type="email"],
        .input-group input[type="password"] {
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
    <div class="login-container">
    <img src="{{ asset('storage/images/SecuLife.jpg') }}" alt="SecuLife" style="width: 150px; margin-bottom: 20px;">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div class="input-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <!-- Password -->
            <div class="input-group">
                <label for="password">Mot de Passe</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <!-- Remember Me -->
            <div class="input-group">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">Se souvenir</label>
            </div>
            <!-- Forgot Password and Submit -->
            <div class="actions">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
                @endif
                <button type="submit">Se Connecter</button>
            </div>
        </form>
    </div>
</body>
</html>
