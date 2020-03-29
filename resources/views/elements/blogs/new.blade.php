@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container">
            <h1>Blog toevoegen</h1>
        </div>   
        <nav class="container sub-menu">
            <h5 class="item active">Algemeen</h5>
            <h5 class="item">Inhoud</h5>
            <h5 class="item">SEO</h5>
        </nav>    
        <div class="container">

            <form method="POST" action="wijzigen/blog">

                <div class="tab tab-1 active">
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

                <div class="tab tab-2">
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