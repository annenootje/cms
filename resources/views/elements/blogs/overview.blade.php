@extends('layouts.master')

@section('content')
    <div class="part">

        <div class="container head top">
            <div>
                <h1>Blogberichten</h1>
                <p>Kies een blogbericht om te wijzigen</p>
            </div>
            <a href="/wijzigen/blogs/new" class="icon-button">
                <img src="/img/icons/plus.svg" alt="">
            </a>
        </div>    
            
        <div class="container">
            <div class="overview list">
                @if(count($blogs) > 0)
                    @foreach($blogs->reverse() as $blog)
                        <div class="item">
                            <a href='/wijzigen/blogs/{{$blog->id}}/edit'>
                                <h3 class="title">
                                    {{ $blog->title }}
                                </h3>
                                {{-- <p class="text">
                                    {{ $blog->created_at->format("d-m-Y") }}
                                </p> --}}
                                <p class="text">247 lezers</p>
                            </a>
                            <div class="controls">
                                <div class="control delete"
                                    data-number="{{$blog->id}}"
                                    data-name="{{$blog->title}}">
                                    <img src="/img/icons/bin-red.svg" alt="">
                                </div>
                                <a
                                    href="/wijzigen/blogs/{{$blog->id}}/toggle"
                                    class="control">
                                    @if($blog->visible)
                                        <img
                                            src="/img/icons/eye-green.svg"
                                            alt="">
                                    @else
                                        <img
                                            src="/img/icons/eye-red.svg"
                                            alt="">
                                    @endif
                                </a>
                                <div onclick="location.href = '/wijzigen/blogs/{{$blog->id}}/edit'" class="control">
                                    <img
                                        src="/img/icons/edit-black.svg"
                                        alt="">
                                </div>
                            </div>  
                        </div>
                    @endforeach
                @else
                    <p class="black">
                        Nog geen blogs
                    </p>
                @endif
            </div>
        </div>
        @include('./widgets/divider', ['text' => "Blog toevoegen", 'link' => "/wijzigen/blogs/new"])
    </div>
    @include('/widgets/modal')
@endsection