<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewsController extends Controller
{
    public function overview() {

        $reviews = Review::all();

        return view("/elements/reviews/overview",
            compact("reviews"));
    }

    public function edit($id) {

        $review = Review::find($id);

        return view("/elements/reviews/edit",
            compact('review'));
    }

    public function new() {

        return view("/elements/reviews/new");
    }

    public function store() {

        $review = new Review;
        $review->name = request("name");
        $review->image = request("image");
        $review->text = request("text");
        $review->save();

        return redirect()->action('ReviewsController@overview');
    }

    public function update($id) {

        $review = Review::find($id);
        $review->name = request("name");
        $review->image = request("image");
        $review->text = request("text");
        $review->save();

        return redirect()->action('ReviewsController@overview');

    }

    public function delete($id) {
        
        $review = Review::find($id);
        $review->delete();
    
        return redirect()->action('ReviewsController@overview');
    }

    public function toggle($id) {
        
        $review = Review::find($id);
        
        $review->visible = !$review->visible;

        $review->save();
    
        return redirect()->back();
    }
}
