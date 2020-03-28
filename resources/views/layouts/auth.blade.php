<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlendIt</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body id="app">

        <main class="login-container">
            <div class="image">
                <img src="/img/login-background.svg" alt="">
            </div>
            @yield('content')
        </main>
        <script src="/js/app.js"></script>
        <script src="https://npmcdn.com/vue/dist/vue.js"></script>
    </body>
</html>
