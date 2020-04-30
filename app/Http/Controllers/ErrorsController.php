<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Error;

class ErrorsController extends Controller
{
    public function index() {
        
        $errors = Error::all();
        $status = false;

        return view("/elements/errors",
            compact("errors", "status"));
    }

    public function update() {

        $id = 1;
        $notfound = Error::find($id);
        $notfound->text = request('text1');
        $notfound->save();

        $id = 2;
        $notfound = Error::find($id);
        $notfound->text = request('text2');
        $notfound->save();

        $id = 3;
        $notfound = Error::find($id);
        $notfound->text = request('text3');
        $notfound->save();

        $id = 4;
        $notfound = Error::find($id);
        $notfound->text = request('text4');
        $notfound->save();

        $id = 5;
        $notfound = Error::find($id);
        $notfound->text = request('text5');
        $notfound->save();

        $errors = Error::all();
        $status = true;

        return view("/elements/errors",
            compact("errors", "status"));
    }
}
