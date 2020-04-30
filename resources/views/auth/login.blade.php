@extends('layouts.auth')

@section('content')

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <h1>Welkom bij BlendIt</h1>
        
        @error('email')
            <p class="red">
                Onjuiste code, probeer opnieuw
            </p>
        @else
            <p>Voer de code in om verder te gaan</p>
        @enderror

        <div class="login-inputs">
            <input type="text" v-on:input="checkLogin(1)" v-on:keyup.delete="backLogin(1)" class="cirkel" autofocus>
            <input type="text" v-on:input="checkLogin(2)" v-on:keyup.delete="backLogin(2)" class="cirkel">
            <input type="text" v-on:input="checkLogin(3)" v-on:keyup.delete="backLogin(3)" class="cirkel">
            <input type="text" v-on:input="checkLogin(4)" v-on:keyup.delete="backLogin(4)" class="cirkel">
            <input type="text" v-on:input="checkLogin(5)" v-on:keyup.delete="backLogin(5)" class="cirkel">
        </div>

        <!-- hidden inputs -->
        <input type="hidden" name="email" value="blendit@live.nl">
        <input id="password" type="hidden" class="login-password" name="password">
        <input type="checkbox" class="hide" name="remember" checked>

        <button type="submit" class="button hide login-submit">
            {{ __('Inloggen') }}
        </button>

        @if (Route::has('password.request'))
            <a class="grey" href="{{ route('password.request') }}">
                Code vergeten?
            </a>
        @endif

        <a href="https://annenoteboom.nl" target="_blank" class="register-question">
            Nog geen lid van BlendIt?
        </a>

    </form>

@endsection