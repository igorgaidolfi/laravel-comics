<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <div class="container">
            <div class="row my-3">
                <div class="col-2 logo">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Dc logo">
                </div>
                <div class="col-8">
                    <nav class="navbar-nav container navbar-light mt-3">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="/">characters</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="/">comics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="/">movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="/">tv</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="/">games</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="/">collectibles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="/">videos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="/">fans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="/">news</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="/">shop</a>
                            </li>                            
                        </ul>   
                    </nav>
                </div>
            </div>
        </div>
    </header>

</body>

</html>