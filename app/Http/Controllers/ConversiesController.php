<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class ConversiesController extends Controller
{
    public function bestellingen() {
        $message = "Bekijk jouw bestellingen";
        $orders = Order::all();

        return view('conversies.bestellingen',
            compact('orders'));
    }
    
    public function aanmeldingen() {
        $message = "Bekijk jouw aanmeldingen";

        return view('conversies.aanmeldingen')
            ->with(["message" => $message]);
    }
}
