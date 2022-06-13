<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('custom-css')

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
       <h1>Movies</h1>
       <div class="container">
        @foreach ($movies as $movie)
        <div class="card">
            <p>Titolo: {{$movie['title']}} </p>
            <p>Titolo originale: {{$movie['original_title']}} </p>
            <p>Nazionalità: {{$movie['nationality']}} </p>
            <p>Data di rilascio: {{$movie['date']}} </p>
            <p>Ratine: {{$movie['vote']}} </p>
        </div>
        @endforeach
       </div>
    </body>
</html>