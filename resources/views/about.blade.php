<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

    </head>
    <body>
        <header>

        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">Contatti</a></li>
                <li><a href="{{route('myImage')}}">Immagini</a></li>
                <li><a href="{{route('game')}}">Gioco</a></li>
            </ul>
        </nav>

            <div>
                <ul>
                    @foreach ($contacts as $contact)
                    <li>{{$contact}}</li>
                    @endforeach
                </ul>
            </div>
        </header>
    </body>
</html>