<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;

class DishesController extends Controller
{
    public function overview() {

        $dishes = Dish::all();

        return view("/elements/dishes/overview",
            compact("dishes"));
    }

    public function edit($id) {

        $dish = Dish::find($id);

        return view("/elements/dishes/edit",
            compact('dish'));
    }

    public function new() {

        return view("/elements/dishes/new");
    }

    public function store() {

        $dish = new Dish;
        $dish->title = request("title");
        $dish->description = request("description");
        $dish->price = request("price");
        $dish->category = request("category");
        $dish->save();

        return redirect()->action('DishesController@overview');
    }

    public function update($id) {

        $dish = Dish::find($id);
        $dish->title = request("title");
        $dish->description = request("description");
        $dish->price = request("price");
        $dish->category = request("category");
        $dish->save();

        return redirect()->action('DishesController@overview');

    }

    public function delete($id) {
        
        $dish = Dish::find($id);
        $dish->delete();
    
        return redirect()->action('DishesController@overview');
    }
}
