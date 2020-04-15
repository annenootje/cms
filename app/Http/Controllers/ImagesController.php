<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{

    public function overview() {

        $images = Image::all();
        return view("/elements/images/overview",
            compact('images'));
    }

    public function new() {

        return view("/elements/images/new");
    }

    public function edit($id) {

        $image = Image::find($id);

        return view("/elements/images/edit",
            compact('image'));
    }

    public function store() {

        request()->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:200000',
        ]);    

        $uploadedImage = request()->image;
        $uploadedImageName = request()->image->getClientOriginalName();
        $uploadedImagePath = public_path() . '/uploads/';
        // $uploadedImagePath = 'public/uploads/';

        $uploadedImage->move($uploadedImagePath, $uploadedImageName);

        $DBimage = new Image;
        $DBimage->name = $uploadedImageName;
        $DBimage->pathname = '/uploads/' . $uploadedImageName;
        $DBimage->title = request("title");
        $DBimage->description = request("description");
        $DBimage->type = $uploadedImage->getClientMimeType();
        $DBimage->folder = "folder";
        $DBimage->save();

        return redirect()->action('ImagesController@overview');
    }

    public function update($id) {

        $image = Image::find($id);
        $image->title = request("title");
        $image->description = request("description");
        $image->save();

        return redirect()->action('ImagesController@overview');

    }

    public function delete($id) {
        
        $image = Image::find($id);
        $image->delete();
    
        return redirect()->action('ImagesController@overview');
    }
}