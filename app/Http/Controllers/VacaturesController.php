<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacature;

class VacaturesController extends Controller
{
    public function overview() {

        $vacatures = Vacature::all();

        return view("/elements/vacatures/overview",
            compact("vacatures"));
    }

    public function edit($id) {

        $vacature = Vacature::find($id);

        return view("/elements/vacatures/edit",
            compact('vacature'));
    }

    public function new() {

        return view("/elements/vacatures/new");
    }

    public function store() {

        $vacature = new Vacature;
        $vacature->function = request("function");
        $vacature->hours = request("hours");
        $vacature->description = request("description");
        $vacature->save();

        return redirect()->action('VacaturesController@overview');
    }

    public function update($id) {

        $vacature = Vacature::find($id);
        $vacature->function = request("function");
        $vacature->hours = request("hours");
        $vacature->description = request("description");
        $vacature->save();

        return redirect()->action('VacaturesController@overview');

    }

    public function delete($id) {
        
        $vacature = vacature::find($id);
        $vacature->delete();
    
        return redirect()->action('VacaturesController@overview');
    }
}
