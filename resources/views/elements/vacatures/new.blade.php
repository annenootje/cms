@extends('layouts.master')

@section('content')
<div class="part small">
        <div class="container">
            <h1>Vacature toevoegen</h1>
        </div>   
   
        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/vacatures/new">
                @csrf

                <div class="tab tab-1 active">
                    
                    <label for="name">Functie</label>
                    <input type="text" id="name" name="function" required autofocus>

                    <label for="hours">Uren</label>
                    <input type="text" id="hours" name="hours" required>

                </div>

                <input
                    type="submit"
                    class="button"
                    value="Toevoegen">

            </form>
        </div>    
    </div>
@endsection