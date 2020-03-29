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
                                <h3 class="title">{{ $blog->title }}</h3>
                                <p class="text">{{ $blog->created_at->format("d-m-Y") }}</p>
                            </div>
                            <div class="controls">
                                <div onclick="location.href = '/wijzigen/blogs/{{$blog->id}}/delete'" class="control">
                                    <img src="/img/icons/bin-red.svg" alt="">
                                </div>
                                <div class="control">
                                    <img
                                        src="/img/icons/eye-green.svg"
                                        alt="">
                                </div>
                                <div onclick="location.href = '/wijzigen/blogs/{{$blog->id}}/edit'" class="control">
                                    <img
                                        src="/img/icons/edit-black.svg"
                                        alt="">
                                </div>
                            </div>  
                        </div>
                    @endforeach
                @else
                    <p>Nog geen blogs.
                    <a href="/blogs/new">
                        Blog toevoegen?
                    </a>
                    </p>
                @endif
            </div>
        </div>
    </div>
@endsection