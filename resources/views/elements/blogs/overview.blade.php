@extends('layouts.master')

@section('content')
    <div class="part">
        <div class="container">
            <h1>Blogs</h1>
            <p>Kies een blog om te wijzigen</p>
        </div>        
        <div class="container">
            <div class="overview list">
                @if(count($blogs) > 0)
                    @foreach($blogs as $blog)
                        <div class="item">
                            <div>
                                <h3 class="title">
                                    {{ $blog->title }}
                                </h3>
                                <p class="text">
                                    {{ $blog->created_at->format("d-m-Y") }}
                                </p>
                            </div>
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
                    <a href="/wijzigen/blogs/new">
                        Blog toevoegen?
                    </a>
                @endif
            </div>
        </div>
    </div>
    @include('/widgets/modal')
@endsection