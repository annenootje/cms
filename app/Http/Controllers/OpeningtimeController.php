<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Openingtime;

class OpeningtimeController extends Controller
{
    public function index() {
        return view("/elements/openingstijden");
            // compact('openingstimes'));
    }

    public function update() {
        $openingtime = new Openingtime;
        $openingtime->monday = request('monday');
        $openingtime->tuesday = request('tuesday');
        $openingtime->wednesday = request('wednesday');
        $openingtime->thursday = request('thursday');
        $openingtime->friday = request('friday');
        $openingtime->saturday = request('saturday');
        $openingtime->sunday = request('sunday');
        $openingtime->save();
    }
}
