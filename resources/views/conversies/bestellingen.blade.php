@extends('layouts.master')

@section('content')
    <div class="part">
        <div class="container">
            <h1>Bestellingen</h1>
        </div>
        <div class="container">
            @if(count($orders) > 0)
                <table>
                    <thead>
                        <td>
                            <p>Bestelling</p>
                        </td>
                        <td>
                            <p>Datum</p>
                        </td>
                        <td>
                            <p>Bedrag</p>
                        </td>
                        <td>
                            <p>Status</p>
                        </td>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->name}}</td>
                                <td>{{$order->created_at->format('d-m-Y')}}</td>
                                <td>&euro;139,00</td>
                                <td>{{$order->status}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Nog geen bestellingen</p>
            @endif
        </div>
    </div>
@endsection