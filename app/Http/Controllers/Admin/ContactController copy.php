<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contact::all();
        return view('admin.contact', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate data
        $request->validate([
            'heading'=> 'required|max:255',
            'sub_heading'=> 'required|max:255',
            'banner_img'=> 'required | mimes:jpeg, jpg, png | max:10000',
            'page_content'=> 'nullable|required',
        ]);

        // upload image
        $bannerImg = time().'.'.$request->banner_img->extension();
        $request->banner_img->move(public_path('banner-img'), $bannerImg);

        $data = new Contact;
        $data->heading = $request->heading;
        $data->sub_heading = $request->sub_heading;
        $data->banner_img = $request->banner_img;
        $data->page_content = $request->page_content;

        $data->save();

        return back()->withSuccess('Page Info Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $data = Contact::where('id', $id)->first();
        return view('frontend.contact', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
