<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboarditem;

class DashboardController extends Controller
{
    public function favorite($id) {
        
        $item = Dashboarditem::find($id);
        $item->isFavorite = !$item->isFavorite;
        $item->save();
    
        return redirect()->back();
    }
}
