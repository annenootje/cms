@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container">
            <h1>Blog toevoegen</h1>
        </div>   
        <nav class="container sub-menu">
            <h4 class="item">Algemeen</h4>
            <h4 class="item">Inhoud</h4>
            <h4 class="item">SEO</h4>
        </nav>    
        <div class="container">

            <form method="POST" action="wijzigen/blog">

                <div class="tab-1">
                    <label for="title">Titel</label>
                    <input type="text" id="title" name="title">

                    <label for="subtitle">Subtitel</label>
                    <input type="text" id="subtitle" name="subtitle">

                    <label for="subtitle">Afbeelding</label>
                    <input type="text" id="subtitle" name="subtitle">

                    <label for="preview">Preview</label>
                    <textarea type="text" id="preview" name="preview">
                    </textarea>
                </div>

                <div class="tab-2">
                    <textarea class="large" name="content"></textarea>
                </div>

                <input
                    type="submit"
                    class="button"
                    value="Blog toevoegen">

            </form>
        </div>    
    </div>
@endsection