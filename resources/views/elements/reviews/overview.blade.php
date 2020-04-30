@extends('layouts.master')

@section('content')
    <div class="part">

        <div class="container head top">
            <div>
                <h1>Reviews</h1>
                <p>Kies een review om te wijzigen</p>
            </div>
            <a href="/wijzigen/reviews/new" class="icon-button">
                <img src="/img/icons/plus.svg" alt="">
            </a>
        </div>    
            
        <div class="container">
            <div class="overview list">
                @if(count($reviews) > 0)
                    @foreach($reviews->reverse() as $review)
                        <div class="item">
                            <a href='/wijzigen/reviews/{{$review->id}}/edit'>
                                <h3 class="title">
                                    {{ $review->name }}
                                </h3>
                                <p class="text">
                                    {{ substr($review->text, 0, 50) }}...
                                </p>
                            </a>
                            <div class="controls">
                                <div class="control delete"
                                    data-number="reviews/{{$review->id}}"
                                    data-name="{{$review->name}}">
                                    <img src="/img/icons/bin-red.svg" alt="">
                                </div>
                                <div onclick="location.href = '/wijzigen/reviews/{{$review->id}}/edit'" class="control">
                                    <img
                                        src="/img/icons/edit-black.svg"
                                        alt="">
                                </div>
                            </div>  
                        </div>
                    @endforeach
                @else
                    <p class="black">
                        Nog geen reviews
                    </p>
                @endif
            </div>
        </div>
        @include('./widgets/divider', ['text' => "Review toevoegen", 'link' => "/wijzigen/reviews/new"])
    </div>
    @include('/widgets/modal')
@endsection