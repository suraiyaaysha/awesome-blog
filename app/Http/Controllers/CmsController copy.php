<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cms;

class CmsController extends Controller
{
    public function home(){
        $cms = Cms::first();
        return view('admin.home', compact('cms'));
    }

    public function about(){
        $cms = Cms::first();
        return view('admin.about', compact('cms'));
    }

    public function contact(){
        $cms = Cms::first();
        return view('admin.contact', compact('cms'));
    }

    public function homeUpdate(){
        $cms = Cms::first();

        // $cms->update([
        //     'home'
        // ]);
        $cms->update($request->all());
        return back()->withSuccess('Page Updated Successfully');
    }

    public function aboutUpdate(Request $request){
        // Validate data
        $request->validate([
            'about_heading'=> 'required',
            'about_sub_heading'=> 'required',
            'about_banner_img'=> 'nullable|mimes:jpeg,jpg,png',
            'about_content'=> 'required',
        ]);

        $cms = Cms::first();
        $cms->update([
            'about_heading'=> $request->about_heading,
            'about_sub_heading'=>$request->about_sub_heading,
            'about_banner_img'=> $request->about_banner_img,
            'about_content'=> $request->about_content,
        ]);

        if(isset($request->about_banner_img)) {
            $file = $request->about_banner_img;
            $url = $file->move('uploads/cms' , $file->hashName());
            $cms->update(['about_banner_img' => $url]);
        }

        return back()->withSuccess('Page Updated Successfully');
    }

    public function contactUpdate(){
        $cms = Cms::first();

        // $cms->update([

        // ]);
        $cms->update($request->all());
        return back()->withSuccess('Page Updated Successfully');
    }
}






        // $cms->home_heading;
        // $cms->home_sub_heading;
        // $cms->home_banner_img;

        // $cms->about_heading;
        // $cms->about_sub_heading;
        // $cms->about_banner_img;

        // $cms->contact_heading;
        // $cms->contact_sub_heading;
        // $cms->contact_banner_img;

