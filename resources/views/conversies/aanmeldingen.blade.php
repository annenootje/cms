@extends('layouts.master')

@section('content')
    <div class="part">
        <div class="container">
            <h1>Aanmeldingen</h1>
        </div>
        <div class="container">
            @if(count($registrations) > 0)
                <div class="overview">
                    @foreach($registrations as $registration)
                        <div class="item registration">
                            <p class="date">{{$registration->created_at->format('d-m-Y')}}</p>
                            <h2 class="title">{{$registration->name}}</h2>
                            <p class="green">{{$registration->email}}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Nog geen aanmeldingen</p>
            @endif
        </div>
    </div>
@endsection