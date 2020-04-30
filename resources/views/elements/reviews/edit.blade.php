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
                            <div class="image placeholder choose-image">
                                <img src="{{$review->image}}" class="chosenImage" alt="">
                            </div>
                        </div>
                    </div>
                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" value="{{$review->name}}" autofocus>

                    <label for="text">Review</label>
                    <textarea 
                        name="text"
                        id="text"
                    >{{$review->text}}</textarea>
                </div>

                <input
                    type="submit"
                    class="button"
                    value="Review wijzigen">

                @include('/widgets/images-modal', [
                    'images' => $images,
                    'chosenImage' => $review->image
                ])

            </form>
        </div>    
    </div>
@endsection