<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >
    <div class="container">
        <div class="illustration">
            <div class="logo-container">
                <img src="assets/js/index.js" alt="Logo" ><h1 class="txt1"> BlueBox</h1>
            </div>
        </div>
        <div class="form">
            <h1>Welcome Back </h1>
            <p>To keep connected with us, please log in with your email and password.</p>
            <input type="email" placeholder="Email Address">
            <input type="password" placeholder="Password">

            <div class="options">
                <label class="checkbox">
                    <input type="checkbox" id="remember-me">
                    Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div>

            <a href="homepage.html"><button>Enter</button></a>
            

            <div class="create-account">
                <a href="homepage.html">Create an account</a>
            </div>
            <div class="social">
                <span>Or you can join with:</span>
                <img src="google-icon.png" alt="Google">
                <img src="facebook-icon.png" alt="Facebook">
                <img src="twitter-icon.png" alt="Twitter">
            </div>
        </div>
    </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
