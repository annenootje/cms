@extends('layouts.master')

@section('content')
<div class="part small">
        <div class="container">
            <h1>Vacature wijzigen</h1>
        </div>   

        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/vacatures/{{$vacature->id}}/edit">
                @csrf
                {{ method_field('PATCH') }}

                <div class="tab tab-1 active">
                    
                    <label for="name">Functie</label>
                    <input type="text" id="name" name="function" value="{{$vacature->function}}" required autofocus>

                    <label for="hours">Uren</label>
                    <input type="text" id="hours" name="hours" value="{{$vacature->hours}}" required>

                </div>

                <input
                    type="submit"
                    class="button"
                    value="Review wijzigen">

            </form>
        </div>    
    </div>
@endsection