<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversiesController extends Controller
{
    public function bestellingen() {
        $message = "Bekijk jouw bestellingen";

        return view('conversies.bestellingen')
            ->with(["message" => $message]);
    }
    
    public function aanmeldingen() {
        $message = "Bekijk jouw aanmeldingen";

        return view('conversies.aanmeldingen')
            ->with(["message" => $message]);
    }
}
