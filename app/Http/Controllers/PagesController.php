<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $message = "Kies een element";
        $welcome = "Welkom Anne";
        
        return view('pages.index')
            ->with([
                "message", $message,
                "welcome" => $welcome
            ]);
    }
    public function vragen() {
        $message = "Zoek jouw vraag";

        return view('pages.vragen')
            ->with(["message", $message]);
    }
    public function resultaten() {
        $message = "Bekijk jouw resultaten";

        return view('pages.resultaten')
            ->with(["message", $message]);
    }
    public function aanbevelingen() {
        $message = "Optimaliseer jouw website";

        return view('pages.aanbevelingen')
            ->with(["message", $message]);
    }
    public function testen() {
        $message = "Kies of maak een test";
        
        return view('pages.testen')
            ->with(["message", $message]);
    }
}
