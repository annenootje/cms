@extends('layouts.master')

@section('content')
<div class="part small">
        <div class="container">
            <h1>Gerecht wijzigen</h1>
        </div>   

        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/dishes/{{$dish->id}}/edit">
                @csrf
                {{ method_field('PATCH') }}

                <div class="tab tab-1 active">

                    <label for="name">Naam</label>
                    <input type="text" id="name" name="title" value="{{$dish->title}}" required autofocus>

                    <label for="price">Prijs</label>
                    <input type="text" id="hours" name="price" value="{{$dish->price}}" required>
                    
                    <label for="category">Categorie</label>
                    {{-- <input type="text" id="category" name="category" value="{{$dish->category}}" required> --}}
                    <select name="category">
                        <option value="Voorgerecht" {{$dish->category === "Voorgerecht" ? "selected" : ""}}>Voorgerecht</option>
                        <option value="Hoofdgerecht" {{$dish->category === "Hoofdgerecht" ? "selected" : ""}}>Hoofdgerecht</option>
                        <option value="Nagerecht" {{$dish->category === "Nagerecht" ? "selected" : ""}}>Nagerecht</option>
                    </select>

                    <label>Omschrijving</label>
                    <textarea name="description"
                    >{{$dish->description}}</textarea>

                </div>

                <input
                    type="submit"
                    class="button"
                    value="Gerecht wijzigen">

            </form>
        </div>    
    </div>
@endsection