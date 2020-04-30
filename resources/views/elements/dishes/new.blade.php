@extends('layouts.master')

@section('content')
<div class="part small">
        <div class="container">
            <h1>Gerecht toevoegen</h1>
        </div>   
   
        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/dishes/new">
                @csrf

                <div class="tab tab-1 active">
                    
                    <label for="name">Naam</label>
                    <input type="text" id="name" name="title" required autofocus>

                    <label for="price">Prijs</label>
                    <input type="text" id="hours" name="price" required>
                    
                    <label for="category">Categorie</label>
                    <select name="category">
                        <option value="Voorgerecht">Voorgerecht</option>
                        <option value="Hoofdgerecht">Hoofdgerecht</option>
                        <option value="Nagerecht">Nagerecht</option>
                    </select>

                    <label>Omschrijving</label>
                    <textarea name="description"
                    ></textarea>

                </div>

                <input
                    type="submit"
                    class="button"
                    value="Toevoegen">

            </form>
        </div>    
    </div>
@endsection