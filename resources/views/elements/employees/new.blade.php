@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container">
            <h1>Werknemer toevoegen</h1>
        </div>   
        <nav class="container sub-menu">
            <h5 class="item active">Gegevens</h5>
            <h5 class="item">Omschrijving</h5>
        </nav>    
        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/employees/new">
                @csrf

                <div class="tab tab-1 active">
                    <label for="image">Afbeelding</label>
                    <div class="images">
                        <div class="inner">
                            <div class="image placeholder"></div>
                        </div>
                    </div>

                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" autofocus>

                    <label for="telephone">Telefoonnummer</label>
                    <input type="text" id="telephone" name="telephone">

                    <label for="email">E-mail adres</label>
                    <input type="text" id="email" name="email">

                    <label for="function">Functie</label>
                    <input type="text" id="function" name="function">

                </div>

                <div class="tab tab-2">
                    <div id="editorjs"></div>
                    <input
                        type="hidden" 
                        class="editor-data" 
                        name="description"
                    >
                </div>

                <input
                    type="submit"
                    class="button"
                    value="Werknemer toevoegen">

            </form>
        </div>    
    </div>
@endsection