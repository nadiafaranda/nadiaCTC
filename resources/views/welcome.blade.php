<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
</head>
<body class="login-page">
    <div class="login-container">
        <form id="loginForm" class="login-form" action="/checklogin" method="POST">
                @csrf 
                @method('POST')
            <div class="form-group">
                <input type="text" id="username" name = "email" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name = "password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label class="remember-me">
                    <input type="checkbox" id="rememberme"> Remember me
                </label>
                <a href="#" class="forgot-password">Forgot?</a>
            </div>
            <button type="submit" class="login-button">LOGIN</button>
        </form>
    </div>
</body>
</html>
