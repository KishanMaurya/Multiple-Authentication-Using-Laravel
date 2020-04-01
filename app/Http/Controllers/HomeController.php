<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Image;

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
        return view('home');
    }
    public function Show()
    {
        $data=Post::orderBy('id', 'asc')->get();
        return view('welcome',compact('data'));
    }
    public function Store(Request $request)
    {
        $id=$request->id;
        $data=Post::where('id', '=' ,$id)->get();
        return view('view' , compact('data'));
    }
}
