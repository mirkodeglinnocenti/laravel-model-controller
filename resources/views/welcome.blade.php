<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel database</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light py-5">
        <div class="container">

            <h1 class="text-center">Lista film</h1>

            <div class="grid-box">
                @foreach ($movies as $movie)

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">titolo: {{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">titolo originale: {{ $movie->original_title }}</h6>
                        <p class="card-text">nazionalità: {{ $movie->nationality }}</p>
                        <p class="card-text">uscita: {{ $movie->date }}</p>
                        <p class="card-text">voto: {{ $movie->vote }}</p>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </main>

</body>

</html>