<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Home: Abdellah NADIR </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@1,900&family=KoHo:wght@700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="images/form.png" type="image/x-icon">

    <style>
        * { 
            font-family: 'Crimson Pro', serif;
            font-family: 'KoHo', sans-serif;
            max-width: 999px;
            margin: auto;
            color:slategray;
        }
    </style>
</head>
<body class="border border-1 container-lg text-dark m-5 p-3">
    <section class="row">
        <div class="col">
            <img src="images/logo.svg" alt="LARAVEL8" width="70px" height="50px">
        </div>
        <div>
            <h3 class="col text-dark">Registration Form: Laravel 8 Training </h3>
        </div>
        <div class="col">
            <nav id="navbar" class="navbar navbar-light bg-light">
                <ul class="nav">
                    <li class="nav-item"><a href="{{ url('signin') }}" class="nav-link link-dark px-2">Login</a></li>
                    <li class="nav-item"><a href="{{ url('signup') }}" class="nav-link link-dark px-2">Sign up</a></li>
                  </ul>
            </nav>
            
        </div>
    </section>
    <hr>
    <div>
        @yield('nadir')
    </div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>

