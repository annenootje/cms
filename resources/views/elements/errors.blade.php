@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container">
            @if ($status)
                <p class="green">
                    <img src="/img/icons/check.svg" alt="">
                    De wijzigingen zijn opgeslagen
                </p>
                <br><br>
            @endif
            <h1>Foutpagina's</h1>
 
        </div>
        <div class="container">
            <form method="POST" action="/wijzigen/errors/edit">
                @csrf
                {{ method_field('PATCH') }}
                
                <div class="tab tab-1 active">
                    @foreach($errors as $error)
                        <label for="{{$error->id}}">{{$error->title}} (foutcode: {{$error->code}})</label>
                        <textarea id="{{$error->id}}" name="text{{$error->id}}" {{$error->id === 1 ? "autofocus" : ""}}
                        >{{$error->text}}</textarea>
                    @endforeach
                </div>
                
                <input type="submit" class="button" value="Wijzigen">
            </form>
        </div>
    </div>
@endsection