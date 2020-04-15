@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container head">
            <h1>Foto wijzigen</h1>
            <a class="icon-button delete control"    
                data-number="images/{{$image->id}}"
                data-name="{{$image->title}}">
                <img src="/img/icons/bin-red.svg" alt="">
            </a>
        </div>

        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/images/{{$image->id}}/edit">
                @csrf
                {{ method_field('PATCH') }}

                <div class="tab tab-1 active">

                    @if (count($errors) > 0)

                        <div class="alert alert-danger">
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
                            {{-- <div class="image placeholder">
                                <input type="file" name="image"/>
                            </div> --}}
                            @if($image->type === "application/pdf")
                                <div class="image">
                                    <embed src="{{$image->pathname}}" />
                                </div>
                            @else
                                <div class="image" style="background-image: url('{{$image->pathname}}')">
                                </div>
                            @endif
                        </div>
                    </div>

                    <label for="title">Titel</label>
                    <input type="text" id="title" name="title" autofocus value="{{$image->title}}">
                    
                    <label for="name">Omschrijving (alt tag)</label>
                    <textarea name="description" id="" cols="30" rows="10"
                    >{{$image->description}}</textarea>

                </div>

                <input
                    type="submit"
                    class="button"
                    value="Foto wijzigen">

            </form>
        </div>    
    </div>
    @include('/widgets/modal')
@endsection