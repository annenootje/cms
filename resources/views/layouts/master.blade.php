<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlendIt</title>
        <link rel="stylesheet" href="/css/app.css">


    </head>
    <body>
        
        <header>
            <div
                class="logo"
                onclick='window.location = "/"'>
            </div>
            <div class="menu">
                <div class="inner">
                    <nav>
                        <a href="/wijzigen">Wijzigen</a>
                        <a href="/verbeteren">Verbeteren</a>
                        <a href="/resultaten">Resultaten</a>
                        <a href="/bestellingen">Bestellingen</a>
                    </nav>
                    <h5>zorbadefiek.info</h5>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="sidebar">
                <span></span>
                <h5 class="info">Kies een element</h5>
                <div class="bottom">
                    <div class="icon-button">
                        <h5>?</h5>
                    </div>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
