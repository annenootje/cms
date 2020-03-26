@extends('layouts.master')

@section('content')
    <div class="part">
        <div class="container">
            @if($welcome)
                <h1>Welkom Zorba</h1>
                <p>Kies een element om te wijzigen</p>
            @else
                <h1>Wijzigen</h1>
            @endif
        </div>
    </div>
    <div class="part">
        <div class="container">
        <div class="overview dashboard">
                <div class="item">
                    <div>
                        <h2 class="title">Algemene gegevens</h2>
                        <p class="text">
                            Titel, subtitel en home afbeelding
                        </p>
                    </div>
                    <div class="progress">
                        <div class="inner red"></div>
                    </div>
                    <div class="controls">
                        <div class="control">
                            <img src="/img/icons/edit-white.svg" alt="">
                            <p>Wijzigen</p>
                        </div>
                        <div class="control">
                            <img src="/img/icons/add-white.svg" alt="">
                            <p>Toevoegen</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <h2 class="title">Algemene gegevens</h2>
                        <p class="text">
                            Titel, subtitel en home afbeelding
                        </p>
                    </div>
                    <div class="progress">
                        <div class="inner red"></div>
                    </div>
                    <div class="controls">
                        <div class="control">
                            <img src="/img/icons/edit-white.svg" alt="">
                            <p>Wijzigen</p>
                        </div>
                        <div class="control">
                            <img src="/img/icons/add-white.svg" alt="">
                            <p>Toevoegen</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h2 class="title">Nieuwsberichten</h2>
                    <p class="text">
                        Wijzig of voeg nieuwsberichten toe
                    </p>
                    <div class="progress">
                        <div class="inner orange"></div>
                    </div>
                </div>
                <div class="item">
                    <h2 class="title">Openingstijden</h2>
                    <p class="text">
                        Titel, subtitel en jfad klsjf dskal jdsakl fj dsaklfj sdakl fdskl jafdslk home afbeelding
                    </p>
                    <div class="progress">
                        <div class="inner red"></div>
                    </div>
                </div>
                <div class="item">
                    <h2 class="title">Algemene gegevens</h2>
                    <p class="text">
                        Titel, subtitel en home afbeelding
                    </p>
                    <div class="progress">
                        <div class="inner red"></div>
                    </div>
                </div>
                <div class="item">
                    <h2 class="title">Contact gegevens</h2>
                    <p class="text">
                        Wijzig de gegevens voor Google Maps
                    </p>
                    <div class="progress">
                        <div class="inner green"></div>
                    </div>
                </div>
                <div class="item">
                    <h2 class="title">Nieuwsberichten</h2>
                    <p class="text">
                        Wijzig of voeg nieuwsberichten toe
                    </p>
                    <div class="progress">
                        <div class="inner orange"></div>
                    </div>
                </div>
                <div class="item">
                    <h2 class="title">Openingstijden</h2>
                    <p class="text">
                        Titel, subtitel en jfad klsjf dskal jdsakl fj dsaklfj sdakl fdskl jafdslk home afbeelding
                    </p>
                    <div class="progress">
                        <div class="inner red"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection