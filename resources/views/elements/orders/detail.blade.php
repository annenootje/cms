@extends('layouts.master')

@section('content')
    <div class="part">
        <div class="container">
            <h1>Bestelling {{ $order->name }}</h1>
            <br>
            <a href="" class="green">Download factuur</a>
        </div>   
        <div class="col-2">
        </div>
        <div class="container col-2">
            <div class="col-3">
                <p>Datum</p>
                <h6>{{ $order->created_at->format("d-m-Y") }}</h6>
                <br>
                <p>Status</p>
                <h6>{{ $order->status }}</h6>
            </div>
            <div class="col-3">
                <p>Totaalprijs</p>
                <h6>&euro;139</h6>
                <br>
                <p>Betaling</p>
                <h6>iDEAL</h6>
            </div>
            <div class="col-3">
                <p>Betaald</p>
                <h6>Ja</h6>
                <br>
                <p>Korting</p>
                <h6>Nee</h6>
            </div>
        </div>
    </div>

    <div class="part">
        <div class="container">
            <div class="overview list orders">
                <h2>Bestelde producten</h2>
                <div class="heading">
                    <div>
                        <p>Productnr.</p>
                        <p>Aantal</p>
                        <p>Per stuk</p>
                    </div>
                    <p>Totaal</p>
                </div>
                <div class="item">
                    <div class="row">
                        <p class="black">394920</p>
                        <p class="black">2</p>
                        <p class="black">&euro;139,00</p>
                    </div>
                    <p class="black">
                        &euro;139,00
                    </p>
                </div>
                <div class="item">
                    <div class="row">
                        <p class="black">394920</p>
                        <p class="black">2</p>
                        <p class="black">&euro;139,00</p>
                    </div>
                    <p class="black">
                        &euro;139,00
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="part">
        <div class="container">
            <h2>Klantgegevens</h2>
            <br>
            <p class="black extra-space">
                <span class="bold min-width">
                    Naam
                </span>
                Jan Janssen
            </p>
            <p class="black extra-space">
                <span class="bold min-width">
                    Adres
                </span>
                Eikenlaan 19
            </p>
            <p class="black extra-space">
                <span class="bold min-width">
                    Postcode
                </span>
                2948FR
            </p>
            <p class="black extra-space">
                <span class="bold min-width">
                    Stad
                </span>
                Haarlem
            </p>
            <p class="black extra-space">
                <span class="bold min-width">
                    Land
                </span>
                Nederland
            </p>
            
        </div>
    </div>
@endsection