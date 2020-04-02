@extends('layouts.master')

@section('content')
    <div class="part">
        <div class="container">
            <h1>{{ $test->title }}</h1>
        </div>   
        <div class="container">
            <h5>Omschrijving</h5>
            <p class="mini-width">{{ $test->description }}</p>
        </div>
    </div>
    <div class="part">
        <div class="container">
            <h2>Uitslag</h2>
            <div class="col-2">
                <div class="card test-result">
                    <div class="item">
                        <h1>2</h1>
                        <p>Bestellingen</p>
                        <h4 class="green">+ 10%</h4>
                    </div>
                    <div class="item">
                        <h1>2401</h1>
                        <p>Bezoekers</p>
                        <h4 class="green">+ 13%</h4>
                    </div>
                    <div class="item">
                        <h1>&euro;129</h1>
                        <p>opbrengst</p>
                        <h4 class="red">- 5%</h4>
                    </div>
                </div>
                <br><br>
                <h6>{{ $test->created_at->format('d-m-Y')}} - {{ $test->created_at->format('d-m-Y')}}</h6>
                <br>
                <p class="small-width">{{ $test->faseOneDescription }}</p>
            </div>
            <div class="col-2">
                <div class="card test-result">
                    <div class="item">
                        <h1>2</h1>
                        <p>Bestellingen</p>
                        <h4 class="red">- 10%</h4>
                    </div>
                    <div class="item">
                        <h1>1148</h1>
                        <p>Bezoekers</p>
                        <h4 class="red">- 13%</h4>
                    </div>
                    <div class="item">
                        <h1>&euro;136</h1>
                        <p>opbrengst</p>
                        <h4 class="green">+ 5%</h4>
                    </div>
                </div>
                <br><br>
                <h6>
                    {{ $test->created_at->format('d-m-Y')}} - {{ $test->created_at->format('d-m-Y')}}
                </h6>
                <br>
                <p class="small-width">{{ $test->faseTwoDescription }}</p>
            </div>
        </div>
    </div>
@endsection