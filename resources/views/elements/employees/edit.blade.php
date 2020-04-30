@extends('layouts.master')

@section('content')
<div class="part small">
        <div class="container">
            <h1>Werknemer wijzigen</h1>
        </div>   
        <nav class="container sub-menu">
            <h5 class="item active">Gegevens</h5>
            <h5 class="item">Omschrijving</h5>
        </nav>    
        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/employees/{{$employee->id}}/edit">
                @csrf
                {{ method_field('PATCH') }}

                <div class="tab tab-1 active">
                    <label for="title">Afbeelding</label>
                    <div class="images">
                        <div class="inner">
                            <div class="image placeholder choose-image">
                                <img src="{{$employee->image}}" class="chosenImage" alt="">
                            </div>
                        </div>
                    </div>
                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" autofocus value="{{$employee->name}}">

                    <label for="telephone">Telefoonnummer</label>
                    <input type="text" id="telephone" name="telephone" value="{{$employee->telephone}}">

                    <label for="email">E-mail adres</label>
                    <input type="text" id="email" name="email" value="{{$employee->email}}">

                    <label for="function">Functie</label>
                    <input type="text" id="function" name="function" value="{{$employee->function}}">
                </div>

                <div class="tab tab-2">
                    <textarea
                        class="large" 
                        name="description"
                        id="editor"
                    >{{$employee->description}}</textarea>
                </div>

                <input
                    type="submit"
                    class="button"
                    value="Werknemer wijzigen">

                @include('/widgets/images-modal', [
                    'images' => $images,
                    'chosenImage' => $employee->image
                ])

            </form>
        </div>    
    </div>
@endsection