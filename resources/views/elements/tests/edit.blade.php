@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container">
            <h1>Test wijzigen</h1>
        </div>   
        <div class="container">

            <form method="POST" action="/testen/{{$test->id}}/edit">
                @csrf
                @method('PATCH')

                <label for="title">
                    Titel
                </label>
                <input type="text" maxlength="20" name="title" autofocus value="{{$test->title}}">

                <label for="description">
                    Korte omschrijving wat de test inhoud
                    <p>max. 90 tekens</p>
                </label>
                <input type="text" maxlength="90" name="description" autofocus value="{{$test->description}}">

                <label for="fase1">Wat verander je in fase 1?</label>
                <textarea type="text" name="faseOneDescription">{{$test->faseOneDescription}}</textarea>

                <label for="fase1">Wat verander je in fase 2?</label>
                <textarea type="text" name="faseTwoDescription">{{$test->faseTwoDescription}}</textarea>

                <input
                    type="submit"
                    class="button"
                    value="Test toevoegen">

            </form>
        </div>    
    </div>
@endsection