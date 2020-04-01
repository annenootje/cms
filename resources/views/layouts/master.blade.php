<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlendIt</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="app">
        
        <header>
            <div
                class="logo"
                onclick='window.location = "/wijzigen"'>
                <div class="return">
                    <div class="inner" onclick="window.history.back()">
                        <img src="/img/icons/return.svg" alt="">
                    </div>
                </div>
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
                            <a
                                href="/wijzigen"
                                class="{{ Request::is('wijzigen*') ? 'active' : '' }}">
                                    Wijzigen
                            </a>
                        </div>
                        <div class="item -has-submenu">
                            <a>Verbeteren</a>
                            <div class="submenu">
                                <a
                                    href="/aanbevelingen"
                                    class="{{ Request::is('aanbevelingen*') ? 'active' : '' }}">
                                        Aanbevelingen
                                </a>
                                <a
                                    href="/testen"
                                    class="{{ Request::is('testen*') ? 'active' : '' }}">
                                        Testen
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <a
                                href="/resultaten" 
                                class="{{ Request::is('resultaten*') ? 'active' : '' }}">
                                    Resultaten
                            </a>
                        </div>
                        <div class="item">
                            <a
                                href="/bestellingen"
                                class="{{ Request::is('bestellingen*') ? 'active' : '' }}">
                                    Bestellingen
                            </a>
                        </div>
                    </nav>
                    <div class="item -has-submenu">
                        <h5>{{ Auth::user()->name }}</h5>
                        <div class="submenu">
                            <a href="{{ url('/logout') }}">Uitloggen</a>
                        </div>
                    </h5>
                </div>
            </div>
        </header>
        <main>
            <div class="sidebar">
                <span></span>
                <h5 class="info">
                    @if (session('message'))
                        {{ session('message') }}
                    @endif
                </h5>
                <div class="bottom">
                    <a href="/vragen" class="icon-button">
                        <h5>?</h5>
                    </a>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </main>
        <div class="mobileMenu">
            
        </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
