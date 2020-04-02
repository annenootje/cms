<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function detail($id) {

        $order = Order::find($id);

        return view('/elements/orders/detail',
            compact('order'));
    }
}
