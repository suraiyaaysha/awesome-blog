<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contactList()
    {
        // $data = Contact::all();
        $data = Contact::latest()->paginate(5);

        return view('admin.contact', compact('data'))->with(
            'i', (request()->input('page', 1) - 1) *5
        );

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
    public function contactFormStore(Request $request)
    {
        // Validate data
        $request->validate([
            'user_name'=> 'required|max:255',
            'user_email'=> 'required|email',
            'user_phone'=> 'required',
            'user_message'=> 'required',
        ]);

        $data = new Contact;
        $data->user_name = $request->user_name;
        $data->user_email = $request->user_email;
        $data->user_phone = $request->user_phone;
        $data->user_message = $request->user_message;


        //  Send mail to admin

        Mail::to($data->user_email)->send(new SendMail($data));
        // Mail::to('suraiyaaysha.cse@gmail.com')->send(new SendMail($data));

        $data->save();

        // dd($data);
        return back()->withSuccess('Form Submitted Successfully');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id) {
    //     $data = Contact::where('id', $id)->first();
    //     return view('frontend.contact', compact('data'));
    // }

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
