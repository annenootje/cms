<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlendIt</title>
        <link rel="stylesheet" href="/css/app.css">


    </head>
    <body id="app">
        
        <header>
            <div
                class="logo"
                onclick='window.location = "/"'>
            </div>
            <div
                class="hamburger"
                @click="toggleMenu"
                :class="{active: menuIsActive}">
                <div class="inner">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="menu">
                <div class="inner">
                    <nav>
                        <div class="item">
                            <a href="/wijzigen">Wijzigen</a>
                        </div>
                        <div class="item -has-submenu">
                            <a>Verbeteren</a>
                            <div class="submenu">
                                <a href="/aanbevelingen">Aanbevelingen</a>
                                <a href="/testen">Testen</a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="/resultaten">Resultaten</a>
                        </div>
                        <div class="item">
                            <a href="/bestellingen">Bestellingen</a>
                        </div>
                    </nav>
                    <div class="item -has-submenu">
                        <a>zorbadefiek.info</a>
                        <div class="submenu">
                            <a href="/uitloggen">Uitloggen</a>
                        </div>
                    </h5>
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
        <div class="mobileMenu">
            
        </div>
        <script src="/js/app.js"></script>
        <script src="https://npmcdn.com/vue/dist/vue.js"></script>
    </body>
</html>
