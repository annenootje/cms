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

    public function edit($id) {

        $blog = Blog::find($id);

        return view("/elements/blogs/edit",
            compact('blog'));
    }

    public function new() {

        return view("/elements/blogs/new");
    }

    public function store() {

        $blog = new Blog;
        $blog->title = request("title");
        $blog->subtitle = request("subtitle");
        $blog->preview = request("preview");
        $blog->image = request("image");
        $blog->content = request("content");
        $blog->metatitle = request("metatitle");
        $blog->metakeywords = request("metakeywords");
        $blog->metadescription = request("metadescription");
        $blog->save();

        return redirect()->action('BlogsController@overview');
    }

    public function update($id) {

        $blog = Blog::find($id);
        $blog->title = request("title");
        $blog->subtitle = request("subtitle");
        $blog->preview = request("preview");
        $blog->image = request("image");
        $blog->content = request("content");
        $blog->metatitle = request("metatitle");
        $blog->metakeywords = request("metakeywords");
        $blog->metadescription = request("metadescription");
        $blog->save();

        return redirect()->action('BlogsController@overview');

    }

    public function delete($id) {
        
        $blog = Blog::find($id);
        $blog->delete();
    
        return redirect()->action('BlogsController@overview');
    }

    public function toggle($id) {
        
        $blog = Blog::find($id);
        
        $blog->visible = !$blog->visible;

        $blog->save();
    
        return redirect()->back();
    }
}
