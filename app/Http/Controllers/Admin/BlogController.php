<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        // $posts = Blog::all()
        $posts = Blog::latest()->paginate(5);
        // return view('admin.dashboard', compact('posts'))->with(
        //     'i', (request()->input('page', 1) - 1) *5
        // );
        return view('admin.blog.index', compact('posts'))->with(
            'i', (request()->input('page', 1) - 1) *5
        );
    }

    public function create() {
        return view('admin.blog.create');
    }

    public function store(Request $request) {
        // Validate data
        $request->validate([
            'title'=> 'required|max:255',
            'short_details'=> 'nullable|required',
            'details'=> 'required',
            'author'=> 'required',
        ]);

        $posts = new Blog;
        $posts->title = $request->title;
        $posts->short_details = $request->short_details;
        $posts->details = $request->details;
        $posts->author = $request->author;

        $posts->save();

        return back()->withSuccess('Post Created Successfully');
    }

    public function edit($id) {
        $post = Blog::where('id', $id)->first();
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        // Validate data
        $request->validate([
            'title'=> 'required|max:255',
            'short_details'=> 'nullable|required',
            'details'=> 'required',
            'author'=> 'required',
        ]);

        $post = Blog::where('id', $id)->first();
        $post->title = $request->title;
        $post->short_details = $request->short_details;
        $post->details = $request->details;
        $post->author = $request->author;

        $post->save();

        return to_route('admin.blog.index', compact('post'))->withSuccess('Post Updated Successfully');
    }

    public function destroy($id) {
        $post = Blog::where('id', $id)->first();
        $post->delete();
        return back()->withSuccess('Post deleted successfully');
    }

    public function show($id) {
        $post = Blog::where('id', $id)->first();
        return view('admin.blog.show', compact('post'));
    }

}
