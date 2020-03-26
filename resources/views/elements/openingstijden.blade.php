@extends('layouts.master')

@section('content')
    <div class="part small">
        <div class="container">
            <h1>Openingstijden</h1>
        </div>
        <div class="container">
            <form action="/openingstijden/edit">
                @csrf
                <div class="form-control">
                    <label for="monday">
                        Maandag
                    </label>
                    <input
                        id="monday"
                        type="text"
                        value="09:00 - 17:00"
                        name="monday"
                    >
                </div>
                <div class="form-control">
                    <label for="tuesday">Dinsdag</label>
                    <input
                        id="tuesday"
                        type="text"
                        value="09:00 - 17:00"
                        name="tuesday"
                    >
                </div>
                <div class="form-control">
                    <label for="wednesday">Woensdag</label>
                    <input
                        id="wednesday"
                        type="text"
                        value="09:00 - 17:00"
                        name="wednesday"
                    >
                </div>
                <div class="form-control">
                    <label for="thursday">Donderdag</label>
                    <input
                        id="thursday"
                        type="text"
                        value="09:00 - 17:00"
                        name="thursday"
                    >
                </div>
                <div class="form-control">
                    <label for="friday">Vrijdag</label>
                    <input
                        id="friday"
                        type="text"
                        value="09:00 - 17:00"
                        name="friday"
                    >
                </div>
                <div class="form-control">
                    <label for="saturday">Zaterdag</label>
                    <input
                        id="saturday"
                        type="text"
                        value="Gesloten"
                        name="saturday"
                    >
                </div>
                <div class="form-control">
                    <label for="sunday">Zondag</label>
                    <input
                        id="sunday"
                        type="text"
                        value="Gesloten"
                        name="sunday"
                    >
                </div>
                <input type="submit" class="button">
            </form>
        </div>
    </div>
@endsection