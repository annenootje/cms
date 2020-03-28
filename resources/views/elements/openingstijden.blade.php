@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container">
            @if ($status)
                <p class="green">
                    <img src="/img/icons/check.svg" alt="">
                    De wijzigingen zijn opgeslagen
                </p>
                <br><br>
            @endif
            <h1>Openingstijden</h1>
 
        </div>
        <div class="container">
            <form method="POST" action="/openingstijden/edit">
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-control">
                    <label for="monday">
                        Maandag
                    </label>
                    <input
                        id="monday"
                        type="text"
                        value='{{ $openingtimes[0]->value }}'
                        name="monday"
                    >
                </div>
                <div class="form-control">
                    <label for="tuesday">Dinsdag</label>
                    <input
                        id="tuesday"
                        type="text"
                        value='{{ $openingtimes[1]->value }}'
                        name="tuesday"
                    >
                </div>
                <div class="form-control">
                    <label for="wednesday">Woensdag</label>
                    <input
                        id="wednesday"
                        type="text"
                        value='{{ $openingtimes[2]->value }}'
                        name="wednesday"
                    >
                </div>
                <div class="form-control">
                    <label for="thursday">Donderdag</label>
                    <input
                        id="thursday"
                        type="text"
                        value='{{ $openingtimes[3]->value }}'
                        name="thursday"
                    >
                </div>
                <div class="form-control">
                    <label for="friday">Vrijdag</label>
                    <input
                        id="friday"
                        type="text"
                        value='{{ $openingtimes[4]->value }}'
                        name="friday"
                    >
                </div>
                <div class="form-control">
                    <label for="saturday">Zaterdag</label>
                    <input
                        id="saturday"
                        type="text"
                        value='{{ $openingtimes[5]->value }}'
                        name="saturday"
                    >
                </div>
                <div class="form-control">
                    <label for="sunday">Zondag</label>
                    <input
                        id="sunday"
                        type="text"
                        value='{{ $openingtimes[6]->value }}'
                        name="sunday"
                    >
                </div>
                <input type="submit" class="button" value="Wijzigen">
            </form>
        </div>
    </div>
@endsection