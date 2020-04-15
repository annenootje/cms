@extends('layouts.master')

@section('content')
    <div class="part">

        <div class="container head top">
            <div>
                <h1>Testen</h1>
                <p>
                    <a href="/vragen#test" class="grey">
                        Lees hier hoe het testen werkt
                    </a>
                </p>
            </div>
            <a href="/testen/new" class="icon-button">
                <img src="/img/icons/plus.svg" alt="">
            </a>
        </div>    
            
        <div class="container">
            <div class="overview">
                @foreach($tests as $test)
                    <div class="item test">
                        <div>
                            <h2 class="title">
                                {{ $test->title }}
                            </h2>
                            
                            @if($test->fase === "one")
                                <p class="status red">Lopend - fase 1</p>
                            @elseif($test->fase === "two")
                                <p class="status red">Lopend - fase 2</p>
                            @else
                                <p class="status green">Afgerond</p>
                            @endif
                            <p class="text">
                                {{ $test->description }}
                            </p>
                            
                        </div>
                        <div class="controls">
                            @if($test->fase === "done")
                                <a
                                    class="control"
                                    href="/testen/{{$test->id}}/detail"
                                >
                                    <img
                                        src="/img/icons/eye-white.svg"
                                        alt="">
                                    <p>
                                        Uitslag
                                    </p>
                                </a>
                            @endif
                            <a
                                class="control"
                                href="/testen/{{$test->id}}/edit"
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
                @endforeach
            </div>
        </div>
        @include('./widgets/divider', [
            'text' => "Test toevoegen", 
            'link' => "/testen/new"
        ])
    </div>
    @include('/widgets/modal')
@endsection