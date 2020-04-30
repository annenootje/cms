@extends('layouts.master')

@section('content')
    <div class="part">

        <div class="container head top">
            <div>
                <h1>Vacatures</h1>
                <p>Kies een vacature om te wijzigen</p>
            </div>
            <a href="/wijzigen/vacatures/new" class="icon-button">
                <img src="/img/icons/plus.svg" alt="">
            </a>
        </div>    
            
        <div class="container">
            <div class="overview list">
                @if(count($vacatures) > 0)
                    @foreach($vacatures->reverse() as $vacature)
                        <div class="item">
                            <a href='/wijzigen/vacatures/{{$vacature->id}}/edit'>
                                <h3 class="title">
                                    {{ $vacature->function }}
                                </h3>
                                <p class="text">
                                    {{ $vacature->hours }}
                                </p>
                            </a>
                            <div class="controls">
                                <div class="control delete"
                                    data-number="vacatures/{{$vacature->id}}"
                                    data-name="{{$vacature->function}}">
                                    <img src="/img/icons/bin-red.svg" alt="">
                                </div>
                                <div onclick="location.href = '/wijzigen/vacatures/{{$vacature->id}}/edit'" class="control">
                                    <img
                                        src="/img/icons/edit-black.svg"
                                        alt="">
                                </div>
                            </div>  
                        </div>
                    @endforeach
                @else
                    <p class="black">
                        Nog geen vacatures
                    </p>
                @endif
            </div>
        </div>
        @include('./widgets/divider', ['text' => "Vacature toevoegen", 'link' => "/wijzigen/vacatures/new"])
    </div>
    @include('/widgets/modal')
@endsection