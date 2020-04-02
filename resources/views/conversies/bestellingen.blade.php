@extends('layouts.master')

@section('content')
    <div class="part">
        <div class="container">
            <h1>Bestellingen</h1>
        </div>
        <div class="container">
            @if(count($orders) > 0)
                <div class="overview list orders">
                    <div class="heading">
                        <div>
                            <p>Bestelling</p>
                            <p>Datum</p>
                            <p>Bedrag</p>
                        </div>
                        <p>Status</p>
                    </div>

                    <div class="overview-part">
                        @foreach($orders->where('status', 'Open') as $order)
                            <a class="item" href="/bestellingen/{{ $order->id }}/detail">
                                <div class="row">
                                    <p class="black">{{$order->name}}</p>
                                    <p class="black">{{$order->created_at->format('d-m-Y')}}</p>
                                    <p class="black">&euro;139,00</p>
                                </div>
                                <p class="black">
                                    <span class="order-dot red"></span>
                                    {{$order->status}}
                                </p>
                            </a>
                        @endforeach
                    </div>

                    <div class="overview-part">
                        @foreach($orders->where('status', 'In proces') as $order)
                            <a class="item" href="/bestellingen/{{ $order->id }}/detail">
                                <div class="row">
                                    <p class="black">{{$order->name}}</p>
                                    <p class="black">{{$order->created_at->format('d-m-Y')}}</p>
                                    <p class="black">&euro;139,00</p>
                                </div>
                                <p class="black">
                                    <span class="order-dot orange"></span>
                                    {{$order->status}}
                                </p>
                            </a>
                        @endforeach
                    </div>

                    <div class="overview-part">
                        @foreach($orders->where('status', 'Afgerond') as $order)
                            <a class="item" href="/bestellingen/{{ $order->id }}/detail">
                                <div class="row">
                                    <p class="black">{{$order->name}}</p>
                                    <p class="black">{{$order->created_at->format('d-m-Y')}}</p>
                                    <p class="black">&euro;139,00</p>
                                </div>
                                <p class="black">
                                    <span class="order-dot green"></span>
                                    {{$order->status}}
                                </p>
                            </a>
                        @endforeach
                    </div>
                </div>
            @else
                <p>Nog geen bestellingen</p>
            @endif
        </div>
    </div>
@endsection