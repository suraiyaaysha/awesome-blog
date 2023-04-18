<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Visitor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Page visitor
        $unique_ip = true;
        $visitors = Visitor::all();
        foreach($visitors as $visitor){
            if($visitor->ip_address == request()->ip()){
                $unique_ip = false;
                break;
            }
        }
        if($unique_ip){
            Visitor::create([
                'ip_address' => request()->ip(),
                'user_agent' => request()->header('User-Agent')
            ]);
        }
        $totalVisitors = Visitor::count();
        // Page visitor

        // For blog option in Dashboard page
        $countPosts = Blog::count();
        $latestPosts = Blog::latest()->take(3)->get();
        // For blog option in Dashboard page

        // return view('home');
        return view('admin.dashboard', compact('countPosts', 'latestPosts', 'totalVisitors'));
    }
}
