@extends('layouts.auth')

@section('content')

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <h1>Code vergeten?</h1>
        <p class="center">Stuur een mail naar <br>
            <a href="mailto:wachtwoordvergeten@blendit.nl">
                wachtwoordvergeten@blendit.nl
            </a>
            <br><br><br>
            <a class="grey" href="/login">Code weer herinnerd?</a>
        </p>
    </form>

@endsection
