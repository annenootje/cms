@extends('layouts.master')

@section('content')
    <div class="part">
        <div class="container head">
            <h1>Resultaten</h1>
            <div class="controls">
                <div class="filter">
                    <p class="label">Start datum</p>
                    <input type="date" value="2020-04-18">
                </div>
                <div class="filter">
                    <p class="label">Eind datum</p>
                    <input type="date" value="2020-05-18">
                </div>
            </div>
        </div>
        <div class="container">
            <h4>Algemeen</h4>
            <div class="results">
                <div class="left">
                    <div class="card numbers">
                        <h1>1329</h1>
                        <p>Bezoekers</p>
                    </div>
                    <div class="card numbers">
                        <h1>1249</h1>
                        <p>Nieuwe<br>bezoekers</p>
                    </div>
                    <div class="card numbers">
                        <h1>1139</h1>
                        <p>Bestellingen</p>
                    </div>
                    <div class="card numbers">
                        <h1>&euro;128</h1>
                        <p>Verkocht<br>aan producten</p>
                    </div>
                </div>
                <div class="right card line-graphic">
                    <h5>Conversies</h5>
                    <canvas id="lineChart" width="100%" height="50px"></canvas>
                </div>
            </div>
        </div>
        <div class="container">
            <h4>Doelgroep</h4>
            <div class="results half">
                <div class="left">
                    <div class="card">
                        <h5 class="title">Geslacht</h5>
                        <canvas id="barChartGender" width="100%" height="80px"></canvas>
                        <div class="legend">
                            <div class="item">
                                <span class="red"></span>
                                <p>Man</p>
                            </div>
                            <div class="item">
                                <span class="blue"></span>
                                <p>Vrouw</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class='title'>
                            Apparaat
                        </h5>
                        <canvas id="barChartSystem" width="100%" height="80px"></canvas>
                        <div class="legend">
                            <div class="item">
                                <span class="red"></span>
                                <p>Mobiel</p>
                            </div>
                            <div class="item">
                                <span class="blue"></span>
                                <p>Desktop</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bar-graphic card">
                    <h5 class="title">Leeftijd</h5>
                    <div class='data'>
                        <div class="item">
                            <p class="black">18 - 30</p>
                            <div class="line">
                                <div class="inner"
                                    style="width:12%">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <p class="black">30 - 40</p>
                            <div class="line">
                                <div class="inner"
                                    style="width:2%">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <p class="black">40 - 50</p>
                            <div class="line">
                                <div class="inner"
                                    style="width:35%">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <p class="black">50 - 60</p>
                            <div class="line">
                                <div class="inner"
                                    style="width:21%">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <p class="black">65+</p>
                            <div class="line">
                                <div class="inner"
                                    style="width:30%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection