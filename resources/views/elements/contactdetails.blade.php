@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container">
            @if ($status)
                <p class="green">
                    <img src="/img/icons/check.svg" alt="">
                    De wijzigingen zijn opgeslagen
                </p>
                <br><br>
            @endif
            <h1>Contact gegevens</h1>
 
        </div>
        <div class="container">
            <form method="POST" action="/wijzigen/contactdetails/edit">
                @csrf
                {{ method_field('PATCH') }}
                <div class="tab tab-1 active">

                    <label for="telephone">Telefoonnummer</label>
                    <input type="text" id="telephone" name="telephone" value="{{$contactdetail->telephone}}" autofocus>
                    
                    <label for="email">E-mail adres</label>
                    <input type="text" id="email" name="email" value="{{$contactdetail->email}}">

                    <label for="address">Adres</label>
                    <input type="text" id="address" name="address" value="{{$contactdetail->address}}">

                    <label for="city">Stad</label>
                    <input type="text" id="city" name="city" value="{{$contactdetail->city}}">

                    <label for="zipcode">Postcode</label>
                    <input type="text" id="zipcode" name="zipcode" value="{{$contactdetail->zipcode}}">
                    
                </div>
                
                <input type="submit" class="button" value="Wijzigen">
            </form>
        </div>
    </div>
@endsection