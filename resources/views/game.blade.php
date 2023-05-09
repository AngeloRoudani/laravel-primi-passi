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

        </header>

        <?php 

        ?>

        <main>
            <form action="/resources/views/game.blade.php" method="GET">
                @csrf
                <label for="insert">Inserisci un numero che vada da uno a 10</label>
                <input type="text" name="userNumber" id="insert">
                <button type="submit">Invia</button>
            </form>

            <div>Il tuo numero è: @if (isset($_GET['userNumber']))
                {{$_GET['userNumber']}}
            @endif</div>

            <div>Il numero del computer è: @if (isset($_GET['userNumber']))
                {{$computerNumber}} 
            @endif</div>

           
        </main>

    </body>
</html>