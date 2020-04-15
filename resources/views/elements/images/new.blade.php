@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container">
            <h1>Foto uploaden toevoegen</h1>
        </div>

        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/images/new" enctype="multipart/form-data">
                @csrf

                <div class="tab tab-1 active">

                    @if (count($errors) > 0)

                        <div class="error">
                            Er is een probleem
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <label for="image">Afbeelding</label>
                    <div class="images">
                        <div class="inner">
                            <div class="image placeholder">
                                <input type="file" name="image"/>
                            </div>
                        </div>
                    </div>

                    <label for="title">Titel</label>
                    <input type="text" id="title" name="title" autofocus>
                    
                    <label for="name">Omschrijving (alt tag)</label>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>

                </div>

                <input
                    type="submit"
                    class="button"
                    value="Foto uploaden">

            </form>
        </div>    
    </div>
@endsection