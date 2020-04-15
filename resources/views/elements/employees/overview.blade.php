@extends('layouts.master')

@section('content')
    <div class="part">

        <div class="container head top">
            <div>
                <h1>Werknemers</h1>
                <p>Kies een werknemer om te wijzigen</p>
            </div>
            <a href="/wijzigen/employees/new" class="icon-button">
                <img src="/img/icons/plus.svg" alt="">
            </a>
        </div>    
            
        <div class="container">
            <div class="overview list">
                @if(count($employees) > 0)
                    @foreach($employees->reverse() as $employee)
                        <div class="item">
                            <a href='/wijzigen/employees/{{$employee->id}}/edit'>
                                <h3 class="title">
                                    {{ $employee->name }}
                                </h3>
                                <p class="text">
                                    {{ $employee->function }}
                                </p>
                            </a>
                            <div class="controls">
                                <div class="control delete"
                                    data-number="{{$employee->id}}"
                                    data-name="{{$employee->name}}">
                                    <img src="/img/icons/bin-red.svg" alt="">
                                </div>
                                <div onclick="location.href = '/wijzigen/employees/{{$employee->id}}/edit'" class="control">
                                    <img
                                        src="/img/icons/edit-black.svg"
                                        alt="">
                                </div>
                            </div>  
                        </div>
                    @endforeach
                @else
                    <p class="black">
                        Nog geen werknemers
                    </p>
                @endif
            </div>
        </div>
        @include('./widgets/divider', ['text' => "werknemer toevoegen", 'link' => "/wijzigen/employees/new"])
    </div>
    @include('/widgets/modal')
@endsection