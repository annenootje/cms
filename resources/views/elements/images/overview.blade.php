@extends('layouts.master')

@section('content')
    <div class="part">

        <div class="container head top">
            <div>
                <h1>Foto's en video's</h1>
            </div>
            <a href="/wijzigen/images/new" class="icon-button">
                <img src="/img/icons/plus.svg" alt="">
            </a>
        </div>    
    </div>
    <div class="part">
        <div class="container">
            <div class="overview">
                @if(count($images) > 0)
                    @foreach($images as $image)
                        <div class="item upload">
                            @if($image->type === "application/pdf")
                                <div class="image">
                                    <embed src="{{$image->pathname}}" />
                                </div>
                            @else
                            <div class="image" style="background-image: url('{{$image->pathname}}')">
                            </div>
                            @endif
                            <div class="controls">
                                <a
                                    class="control"
                                    href='/wijzigen/images/{{$image->id}}/edit'>
                                <img src="/img/icons/edit-white.svg" alt="">
                                    <p>Wijzigen</p>
                                </a>
                                <div class="control delete"
                                    data-number="images/{{$image->id}}"
                                    data-name="{{$image->title}}">
                                    <img src="/img/icons/bin-white.svg" alt="">
                                    <p>Verwijderen</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="black">
                        Nog geen afbeeldingen
                    </p>
                @endif
                
            </div>
        </div>

        @include('./widgets/divider', [
            'text' => "Foto toevoegen", 
            'link' => "/wijzigen/images/new"
        ])

    </div>
    @include('/widgets/modal')
@endsection