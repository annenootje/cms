<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Image;

class ReviewsController extends Controller
{
    public function overview() {

        $reviews = Review::all();

        return view("/elements/reviews/overview",
            compact("reviews"));
    }

    public function edit($id) {

        $review = Review::find($id);
        $images = Image::all();


        return view("/elements/reviews/edit",
            compact('review', 'images'));
    }

    public function new() {

        $images = Image::all();

        return view("/elements/reviews/new",
        compact('images'));
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
