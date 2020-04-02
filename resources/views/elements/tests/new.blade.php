@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container">
            <h1>Test toevoegen</h1>
            <p class="small-width">
                De test start op het moment dat de test wordt toegevoegd. 
                Fase 1 duurt twee weken. Na deze fase 1 krijg je een mail ter herinnering. Fase 2
                start direct na fase 2 en duurt ook 2 weken. Daarna is de test voorbij en kun je de
                resultaten zien.
            </p>
        </div>   
        <div class="container">

            <form method="POST" action="/testen/new">
                @csrf

                <label for="title">
                    Titel
                </label>
                <input type="text" maxlength="20" name="title" autofocus>

                <label for="description">
                    Korte omschrijving wat de test inhoud
                    <p>max. 90 tekens</p>
                </label>
                <input type="text" maxlength="90" name="description" autofocus>

                <label for="fase1">Wat verander je in fase 1?</label>
                <textarea type="text" name="faseOneDescription"></textarea>

                <label for="fase1">Wat verander je in fase 2?</label>
                <textarea type="text" name="faseTwoDescription"></textarea>

                <input
                    type="submit"
                    class="button"
                    value="Test toevoegen">

            </form>
        </div>    
    </div>
@endsection