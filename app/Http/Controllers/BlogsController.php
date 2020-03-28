<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    public function overview() {

        $blogs = Blog::all();

        return view("/elements/blogs/overview",
            compact("blogs"));
    }

    public function edit() {

        return view("/elements/blogs/edit");
    }

    public function new() {

        return view("/elements/blogs/new");
    }

    public function update() {

        $id = 1;
        $monday = Blog::find($id);
        $monday->value = request('monday');
        $monday->save();

        return view("/elements/blogs/overview",
            compact("openingtimes", "status"));
        
    }
}
