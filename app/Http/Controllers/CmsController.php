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

    public function homeUpdate(Request $request){
        // Validate data
        $request->validate([
            'home_heading'=> 'required',
            'home_sub_heading'=> 'required',
            'home_banner_img'=> 'nullable|mimes:jpeg,jpg,png|max:15000',
        ]);

        $cms = Cms::first();
        $cms->update([
            'home_heading'=> $request->home_heading,
            'home_sub_heading'=>$request->home_sub_heading,
            // 'home_banner_img'=> $request->home_banner_img,
        ]);

        if(isset($request->home_banner_img)) {
            $file = $request->home_banner_img;

            $url = $file->move('uploads/cms' , $file->hashName());
            $cms->update(['home_banner_img' => $url]);
            // $cms->update($request->except('about_banner_image'));
        }

        return back()->withSuccess('Home Page Updated Successfully');
    }

    public function aboutUpdate(Request $request){

        // $cms->update([
        //     'about'
        // ]);

        // Validate data
        $request->validate([
            'about_heading'=> 'required',
            'about_sub_heading'=> 'required',
            'about_banner_img'=> 'nullable|mimes:jpeg,jpg,png|max:15000',
            'about_content'=> 'required',
        ]);

        $cms = Cms::first();

        $cms->update([
            'about_heading'=> $request->about_heading,
            'about_sub_heading'=>$request->about_sub_heading,
            // 'about_banner_img'=> $request->about_banner_img,
            'about_content'=> $request->about_content,
        ]);

        if(isset($request->about_banner_img)) {
            $file = $request->about_banner_img;

            $url = $file->move('uploads/cms' , $file->hashName());
            $cms->update(['about_banner_img' => $url]);
            // $cms->update($request->except('about_banner_image'));
        }

        return back()->withSuccess('Page Updated Successfully');
    }

    public function contactUpdate(Request $request){

        // return $request->all();

        // Validate data
        $request->validate([
            'contact_heading'=> 'required',
            'contact_sub_heading'=> 'required',
            'contact_banner_img'=> 'nullable|mimes:jpeg,jpg,png|max:15000',
            'contact_content'=> 'required',
        ]);

        $cms = Cms::first();

        $cms->update([
            'contact_heading'=> $request->contact_heading,
            'contact_sub_heading'=>$request->contact_sub_heading,
            'contact_content'=> $request->contact_content,
        ]);

        if(isset($request->contact_banner_img)) {
            $file = $request->contact_banner_img;

            $url = $file->move('uploads/cms' , $file->hashName());
            $cms->update(['contact_banner_img' => $url]);
            // $cms->update($request->except('about_banner_image'));
        }

        return back()->withSuccess('Contact Page Updated Successfully');
    }
}
