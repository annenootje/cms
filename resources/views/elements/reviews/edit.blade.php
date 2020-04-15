@extends('layouts.master')

@section('content')
<div class="part small">
        <div class="container">
            <h1>Review wijzigen</h1>
        </div>   

        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/reviews/{{$review->id}}/edit">
                @csrf
                {{ method_field('PATCH') }}

                <div class="tab tab-1 active">
                    <label for="title">Afbeelding</label>
                    <div class="images">
                        <div class="inner">
                            <div class="image placeholder"></div>
                        </div>
                    </div>
                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" value="{{$review->name}}" autofocus>

                    <label for="text">Review</label>
                    <textarea 
                        name="text"
                        id="text"
                        class="large"
                    >{{$review->text}}</textarea>
                </div>

                <input
                    type="submit"
                    class="button"
                    value="Werknemer wijzigen">

            </form>
        </div>    
    </div>
@endsection