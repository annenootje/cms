@extends('layouts.master')

@section('content')

    <div class="part">
        <div class="container">
            <h1>{{ $welcome }}</h1>
            <p class="black">Kies een element om te wijzigen of toe te voegen</p>
        </div>
    </div>

    @if(count($dashboarditems->where('isFavorite')) > 0)
    <div class="part">
        <div class="container">
            <p class="title-divider">
                Favoriete onderdelen
            </p>
            <div class="overview dashboard">

                @foreach($dashboarditems->where('isFavorite') as $item)
                    @include(".widgets.edit-item", [
                        'id' => "$item->id",
                        'title' => "$item->title", 
                        "description" => "$item->description",
                        "addLink" => "$item->addLink",
                        "editLink" => "$item->editLink",
                        "progress" => "$item->progress",
                        "isFavorite" => "$item->isFavorite"
                    ])
                @endforeach

            </div>
        </div>
    </div>
    @endif

    <div class="part">
        <div class="container">
            <p class="title-divider">
                Alle onderdelen
            </p>
            <div class="overview dashboard">

                @foreach($dashboarditems->where('category', '!=', 'overig') as $item)
                    @include(".widgets.edit-item", [
                        'id' => "$item->id",
                        'title' => "$item->title", 
                        "description" => "$item->description",
                        "addLink" => "$item->addLink",
                        "editLink" => "$item->editLink",
                        "progress" => "$item->progress",
                        "isFavorite" => "$item->isFavorite"
                    ])
                @endforeach
            
            </div>
        </div>
    </div>

    <div class="part">
        <div class="container">
            <p class="title-divider">
                Overige onderdelen
            </p>
            <div class="overview dashboard">

                @foreach($dashboarditems->where('category', 'overig') as $item)
                    @include(".widgets.edit-item", [
                        'id' => "$item->id",
                        'title' => "$item->title", 
                        "description" => "$item->description",
                        "addLink" => "$item->addLink",
                        "editLink" => "$item->editLink",
                        "progress" => "$item->progress",
                        "isFavorite" => "$item->isFavorite"
                    ])
                @endforeach
            
            </div>
        </div>
    </div>
@endsection