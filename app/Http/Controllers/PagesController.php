<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function resultaten() {
        return view('pages.resultaten');
    }
    public function aanbevelingen() {
        return view('pages.aanbevelingen');
    }
    public function bestellingen() {
        return view('pages.bestellingen');
    }
    public function testen() {
        return view('pages.testen');
    }
}
