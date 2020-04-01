<?php

namespace App\Http\Controllers;

use App\writer;
use Auth;
use App\Post;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Response;
use DB;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('writer.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function show(writer $writer)
    {
        $posts=Post::where('writer_id' , Auth::user()->id)->get();
        return view('user.post_view',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function edit(writer $writer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, writer $writer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy(writer $writer)
    {
        //
    }
    public function WriterDash()
    {
        return view('writer');
    }
}
