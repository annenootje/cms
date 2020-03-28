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

                <div class="item">
                    <div>
                        <h2 class="title">Blog</h2>
                        <p class="text">
                            Wijzig en cre&#235;er blogs
                        </p>
                    </div>
                    <div class="progress">
                        <div
                            class="inner green"
                            style="width: 100%;">
                        </div>
                    </div>
                    <div class="controls">
                        <a
                            class="control"
                            href="/wijzigen/blogs/new"
                        >
                            <img
                                src="/img/icons/add-white.svg"
                                alt="">
                            <p>Toevoegen</p>
                        </a>
                        <a
                            class="control"
                            href="/wijzigen/blogs/edit"
                        >
                            <img
                                src="/img/icons/edit-white.svg"
                                alt="">
                            <p>Wijzigen</p>
                        </a>
                    </div>
                </div>
                
                <div class="item">
                    <div>
                        <h2 class="title">Openingstijden</h2>
                        <p class="text">
                            Wijzig de openingstijden
                        </p>
                    </div>
                    <div class="progress">
                        <div
                            class="inner green"
                            style="width: 100%;">
                        </div>
                    </div>
                    <div class="controls">
                        <a
                            class="control"
                            href="/wijzigen/openingstijden"
                        >
                            <img
                                src="/img/icons/edit-white.svg"
                                alt="">
                            <p>
                                Wijzigen
                            </p>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection