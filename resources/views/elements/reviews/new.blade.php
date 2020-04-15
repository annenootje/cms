@extends('layouts.master')

@section('content')
<div class="part small">
        <div class="container">
            <h1>Review toevoegen</h1>
        </div>   
   
        <div class="container tab-menu">

            <form method="POST" action="/wijzigen/reviews/new">
                @csrf

                <div class="tab tab-1 active">
                    <label for="title">Afbeelding</label>
                    <div class="images">
                        <div class="inner">
                            <div class="image placeholder"></div>
                        </div>
                    </div>
                    <label for="name">Reviewer</label>
                    <input type="text" id="name" name="name" autofocus>

                    <label for="name">Review</label>
                    <textarea 
                        name="text"
                        id="text"
                    ></textarea>
                </div>

                <input
                    type="submit"
                    class="button"
                    value="Review toevoegen">

            </form>
        </div>    
    </div>
@endsection