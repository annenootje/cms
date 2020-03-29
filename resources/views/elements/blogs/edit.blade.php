@extends('layouts.master')

@section('content')
<div class="part small">
        <div class="container">
            <h1>Blog wijzigen</h1>
        </div>   
        <nav class="container sub-menu">
            <h5 class="item active">Algemeen</h5>
            <h5 class="item">Inhoud</h5>
            <h5 class="item">SEO</h5>
        </nav>    
        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/blogs/{{$blog->id}}/edit">
                @csrf
                {{ method_field('PATCH') }}

                <div class="tab tab-1 active">
                    <label for="title">Titel</label>
                    <input type="text" id="title" name="title" value="{{$blog->title}}">

                    <label for="subtitle">Subtitel</label>
                    <input type="text" id="subtitle" name="subtitle" value="{{$blog->subtitle}}">

                    <label for="subtitle">Afbeelding</label>
                    <input type="text" id="subtitle" name="image" value="{{$blog->image}}">

                    <label for="preview">Preview</label>
                    <textarea type="text" id="preview" name="preview">{{$blog->preview}}
                    </textarea>
                </div>

                <div class="tab tab-2">
                    <textarea
                        class="large" 
                        name="content"
                        id="editor"
                    >{{$blog->content}}</textarea>
                </div>

                <div class="tab tab-3">
                    <label for="metatitle">Pagina titel</label>
                    <input type="text" id="metatitle" name="metatitle" value="{{$blog->metatitle}}">

                    <label for="metakeywords">Pagina woorden</label>
                    <input type="text" id="metakeywords" name="metakeywords" value="{{$blog->metakeywords}}">

                    <label for="metadescription">Pagina omschrijving</label>
                    <input type="text" id="metadescription" name="metadescription" value="{{$blog->metadescription}}">
                </div>

                <input
                    type="submit"
                    class="button"
                    value="Blog wijzigen">

            </form>
        </div>    
    </div>
@endsection