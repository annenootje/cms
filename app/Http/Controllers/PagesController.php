<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\Test;
use App\Dashboarditem;

class PagesController extends Controller
{
    public function index() {
        $message = "Kies een element";
        $name = Auth::user()->name;
        $name = substr($name, 0, strpos($name, ' '));
        $welcome = "Welkom " . $name;

        $dashboarditems = Dashboarditem::all()->sortBy('title');
        
        return view('pages.wijzigen',
            compact('dashboarditems'))
            ->with([
                "message", $message,
                "welcome" => $welcome
            ]);
    }
    public function wijzigen() {
        $message = "Kies een element";
        $welcome = "Website wijzigen";

        $dashboarditems = Dashboarditem::all()->sortBy('title');
        
        return view('pages.wijzigen',
            compact('dashboarditems'))
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
        $tests = Test::all();
        $now = date_create();

        foreach($tests as $test) {
            $difference = date_diff($test->created_at, $now);

            if($difference->days <= 14) {
                $test->fase = "one";
            } else if ( $difference->days >= 15 && $difference->days <= 28 ) {
                $test->fase = "two";
            } else {
                $test->fase = "done";
            }
        }
        
        return view('pages.testen',
            compact('tests'));
    }
    public function logout () {
        auth()->logout();
        return redirect('/login');
    }
}
