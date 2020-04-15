@extends('layouts.master')

@section('content')
    <div class="part">
        <div class="container">
            <h1>{{ $welcome }}</h1>
            <p>Kies een element om te wijzigen</p>
        </div>
    </div>
    <div class="part">
        <div class="container">
            <div class="overview dashboard">

                @include(".widgets.edit-item", [
                    'title' => "Blogs", 
                    "description" => "Wijzig en creëer blogs",
                    "addLink" => "/wijzigen/blogs/new",
                    "editLink" => "/wijzigen/blogs",
                    "progress" => "90"
                ])

                @include(".widgets.edit-item", [
                    'title' => "Contact", 
                    "description" => "Contact gegevens, adres, route en bereikbaarheid",
                    "addLink" => "",
                    "editLink" => "/wijzigen/contactdetails",
                    "progress" => "90"
                ])

                @include(".widgets.edit-item", [
                    'title' => "Foto's en video's", 
                    "description" => "Voeg media toe",
                    "addLink" => "/wijzigen/images/add",
                    "editLink" => "/wijzigen/images",
                    "progress" => "50"
                ])

                @include(".widgets.edit-item", [
                    'title' => "Openingstijden", 
                    "description" => "Wijzig de openingstijden",
                    "addLink" => "",
                    "editLink" => "/wijzigen/openingstijden",
                    "progress" => "25"
                ])

                @include(".widgets.edit-item", [
                    'title' => "Reviews", 
                    "description" => "Wijzig en voeg reviews toe",
                    'addLink' => "/wijzigingen/reviews/new",
                    'editLink' => "/wijzigingen/reviews",
                    'progress' => "10"
                ])

                @include(".widgets.edit-item", [
                    'title' => "Werknemers", 
                    "description" => "Wijzig en voeg werknemers toe",
                    'addLink' => "/wijzigen/employees/new",
                    'editLink' => "/wijzigingen/employees",
                    'progress' => "70"
                ])
               
            </div>
        </div>
    </div>
@endsection