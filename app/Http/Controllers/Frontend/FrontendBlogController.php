<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class FrontendBlogController extends Controller
{
    public function index() {
        $posts = Blog::latest()->paginate(5);
        return view('frontend.home', compact('posts'))->with(
            'i', (request()->input('page', 1) - 1) *5
        );
    }


    // public function create() {
    //     return view('admin.blog.create');
    // }

    // public function store(Request $request) {
    //     // Validate data
    //     $request->validate([
    //         'title'=> 'required|max:255',
    //         'details'=> 'required',
    //         'author'=> 'required',
    //     ]);

    //     $posts = new Blog;
    //     $posts->title = $request->title;
    //     $posts->details = $request->details;
    //     $posts->author = $request->author;

    //     $posts->save();

    //     return back()->withSuccess('Post Created Successfully');
    // }

    // public function edit($id) {
    //     $post = Blog::where('id', $id)->first();
    //     return view('admin.blog.edit', compact('post'));
    // }

    // public function update(Request $request, $id) {
    //     // Validate data
    //     $request->validate([
    //         'title'=> 'required|max:255',
    //         'details'=> 'required',
    //         'author'=> 'required',
    //     ]);

    //     $post = Blog::where('id', $id)->first();
    //     $post->title = $request->title;
    //     $post->details = $request->details;
    //     $post->author = $request->author;

    //     $post->save();

    //     return to_route('admin.dashboard', compact('post'))->withSuccess('Post Updated Successfully');
    // }

    // public function destroy($id) {
    //     $post = Blog::where('id', $id)->first();
    //     $post->delete();
    //     return back()->withSuccess('Post deleted successfully');
    // }

    public function show($id) {
        $post = Blog::where('id', $id)->first();
        return view('frontend.blog.blog-details', compact('post'));
    }

}
