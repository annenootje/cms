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
                                <div class="control"></div>
                                <div class="control"></div>
                                <div class="control"></div>
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