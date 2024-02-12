<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dc Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                <div class="col-2 p-2">
                    <div class="card">
                        <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
                        <div class="card-body">
                          <p class="card-title">{{$comic['title']}}</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>

</html>