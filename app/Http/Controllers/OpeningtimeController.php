<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Openingtime;

class OpeningtimeController extends Controller
{
    public function index() {
        
        $openingtimes = Openingtime::all();
        $status = false;

        return view("/elements/openingstijden",
            compact("openingtimes", "status"));
    }

    public function update() {

        $id = 1;
        $monday = Openingtime::find($id);
        $monday->value = request('monday');
        $monday->save();

        $id = 2;
        $tuesday = Openingtime::find($id);
        $tuesday->value = request('tuesday');
        $tuesday->save();

        $id = 3;
        $wednesday = Openingtime::find($id);
        $wednesday->value = request('wednesday');
        $wednesday->save();

        $id = 4;
        $thursday = Openingtime::find($id);
        $thursday->value = request('thursday');
        $thursday->save();

        $id = 5;
        $friday = Openingtime::find($id);
        $friday->value = request('friday');
        $friday->save();

        $id = 6;
        $saturday = Openingtime::find($id);
        $saturday->value = request('saturday');
        $saturday->save();

        $id = 7;
        $sunday = Openingtime::find($id);
        $sunday->value = request('sunday');
        $sunday->save();

        $openingtimes = Openingtime::all();
        $status = true;

        return view("/elements/openingstijden",
            compact("openingtimes", "status"));
        
    }
}
