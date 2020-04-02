<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestsController extends Controller
{

    public function edit($id) {

        $test = Test::find($id);

        return view("/elements/tests/edit",
            compact('test'));
    }

    public function new() {

        return view("/elements/tests/new");
    }

    public function store() {

        $test = new Test;
        $test->title = request("title");
        $test->description = request("description");
        $test->faseOneDescription = request("faseOneDescription");
        $test->faseTwoDescription = request("faseTwoDescription");
        $test->save();

        return redirect()->action('PagesController@testen');
    }

    public function update($id) {

        $test = Test::find($id);
        $test->title = request("title");
        $test->description = request("description");
        $test->faseOneDescription = request("faseOneDescription");
        $test->faseTwoDescription = request("faseTwoDescription");
        $test->save();

        return redirect()->action('PagesController@testen');

    }

    public function delete($id) {
        
        $test = Test::find($id);
        $test->delete();
    
        return redirect()->action('PagesController@testen');
    }

    public function detail($id) {

        $test = Test::find($id);

        return view("elements/tests/detail",
            compact("test"));
    }
}
