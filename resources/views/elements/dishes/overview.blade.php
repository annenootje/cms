@extends('layouts.master')

@section('content')
    <div class="part">

        <div class="container head">
            <div>
                <h1>Gerechten</h1>
            </div>
            <a href="/wijzigen/dishes/new" class="icon-button">
                <img src="/img/icons/plus.svg" alt="">
            </a>
        </div>    
            
        <div class="container">
            <div class="overview list">
                @if(count($dishes) > 0)
                    @if(count($dishes->where('category', 'Voorgerecht')) > 0)
                        <p>Voorgerechten</p>
                        <br>
                        @foreach($dishes->where('category', 'Voorgerecht') as $dish)
                            <div class="item">
                                <a href='/wijzigen/dishes/{{$dish->id}}/edit'>
                                    <h3 class="title">
                                        {{ $dish->title }}
                                    </h3>
                                    <p class="text">
                                        {{ $dish->category }}
                                    </p>
                                </a>
                                <div class="controls">
                                    <div class="control delete"
                                        data-number="dishes/{{$dish->id}}"
                                        data-name="{{$dish->title}}">
                                        <img src="/img/icons/bin-red.svg" alt="">
                                    </div>
                                    <div onclick="location.href = '/wijzigen/dishes/{{$dish->id}}/edit'" class="control">
                                        <img
                                            src="/img/icons/edit-black.svg"
                                            alt="">
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                        <br><br>
                    @endif
                    @if(count($dishes->where('category', 'Hoofdgerecht')) > 0)
                        <p>Hoofdgerechten</p>
                        <br>
                        @foreach($dishes->where('category', 'Hoofdgerecht') as $dish)
                            <div class="item">
                                <a href='/wijzigen/dishes/{{$dish->id}}/edit'>
                                    <h3 class="title">
                                        {{ $dish->title }}
                                    </h3>
                                    <p class="text">
                                        {{ $dish->category }}
                                    </p>
                                </a>
                                <div class="controls">
                                    <div class="control delete"
                                        data-number="dishes/{{$dish->id}}"
                                        data-name="{{$dish->title}}">
                                        <img src="/img/icons/bin-red.svg" alt="">
                                    </div>
                                    <div onclick="location.href = '/wijzigen/dishes/{{$dish->id}}/edit'" class="control">
                                        <img
                                            src="/img/icons/edit-black.svg"
                                            alt="">
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                        <br><br>
                    @endif
                    @if(count($dishes->where('category', 'Nagerecht')) > 0)
                        <p>Nagerechten</p>
                        <br>
                        @foreach($dishes->where('category', 'Nagerecht') as $dish)
                            <div class="item">
                                <a href='/wijzigen/dishes/{{$dish->id}}/edit'>
                                    <h3 class="title">
                                        {{ $dish->title }}
                                    </h3>
                                    <p class="text">
                                        {{ $dish->category }}
                                    </p>
                                </a>
                                <div class="controls">
                                    <div class="control delete"
                                        data-number="dishes/{{$dish->id}}"
                                        data-name="{{$dish->title}}">
                                        <img src="/img/icons/bin-red.svg" alt="">
                                    </div>
                                    <div onclick="location.href = '/wijzigen/dishes/{{$dish->id}}/edit'" class="control">
                                        <img
                                            src="/img/icons/edit-black.svg"
                                            alt="">
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                    @endif
                @else
                    <p class="black">
                        Nog geen gerechten
                    </p>
                @endif
            </div>
        </div>
        @include('./widgets/divider', ['text' => "Gerecht toevoegen", 'link' => "/wijzigen/dishes/new"])
    </div>
    @include('/widgets/modal')
@endsection