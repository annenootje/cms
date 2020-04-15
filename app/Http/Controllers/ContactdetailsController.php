<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactdetail;

class ContactdetailsController extends Controller
{
    public function index() {
        
        $contactdetail = Contactdetail::find(1);
        $status = false;

        return view("/elements/contactdetails",
            compact("contactdetail", "status"));
    }

    public function update() {

        $contactdetail = Contactdetail::find(1);
        $contactdetail->telephone = request('telephone');
        $contactdetail->email = request('email');
        $contactdetail->address = request('address');
        $contactdetail->city = request('city');
        $contactdetail->zipcode = request('zipcode');
        $contactdetail->save();

        $status = true;

        return view("/elements/contactdetails",
            compact("contactdetail", "status"));
        
    }
}
