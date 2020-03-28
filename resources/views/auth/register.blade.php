@extends('layouts.auth')

@section('content')

    <form method="POST" action="{{ route('register') }}" class="register">
        @csrf

        <h1>Registeren</h1>
        <br><br>
        <label for="name">{{ __('Naam') }}</label>
        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <p class="red">
                {{ $message }}
            </p>
        @enderror        

        <label for="password">
            {{ __('Code') }}
        </label>

        <input id="password" type="number" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <p class="red">
                {{ $message }}
            </p>
            <br><br>
        @enderror

        <label for="password-confirm">{{ __('Bevestig code') }}</label>
        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        <input type="hidden" name="email" value="blendit@live.nl" required>
        <input type="submit" class="button" value="Registreer nieuwe gebruiker">

    </form>

@endsection
