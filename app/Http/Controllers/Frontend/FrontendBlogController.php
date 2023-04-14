<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Cms;

class FrontendBlogController extends Controller
{
    // public function index() {
    //     $posts = Blog::latest()->paginate(5);
    //     return view('frontend.home', compact('posts'))->with(
    //         'i', (request()->input('page', 1) - 1) *5
    //     );
    // }

    // For CMS Controller
    public function home() {
        $cms = Cms::first();

        $posts = Blog::latest()->paginate(5);
        return view('frontend.home', compact('cms','posts'))->with(
            'i', (request()->input('page', 1) - 1) *5
        );
    }

    public function show($id) {
        $post = Blog::where('id', $id)->first();
        return view('frontend.blog.blog-details', compact('post'));
    }

    public function about() {
        $cms = Cms::first();

        return view('frontend.about', compact('cms'));
    }
    public function contact() {
        $cms = Cms::first();

        return view('frontend.contact', compact('cms'));
    }

}
