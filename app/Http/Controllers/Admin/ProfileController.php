<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
// use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile');
    }

    public function update(User $user, Request $request)
    {
        $user->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'photo' =>$request->photo,
            'address' =>$request->address,
            'updated_at' => now()
        ]);

        if(isset($request->photo)) {
            $file = $request->photo;

            $url = $file->move('uploads/profile' , $file->hashName());
            $user->update(['photo' => $url]);
        }

        // return $this->success('profile', 'Profile updated successfully!');
        return back()->withSuccess('profile updated successfully');
    }

}
