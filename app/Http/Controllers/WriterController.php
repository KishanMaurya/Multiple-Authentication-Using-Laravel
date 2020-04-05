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
        
        $writer_id=Auth::user()->id;
        $title=$request->title;
        $body=$request->body;
        $image=$request->image;
        $created_at=Carbon::now();
        $request->validate(
            [
                'title' => 'required',
                'body' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]
        );

        if ($request->hasFile('image'))
        {
            $this->validate($request, 
            [
                'image'=>['mimes:jpeg,jpg,png,svg','max:6000'],
            ], 
            [
                'image.mimes'=>'Image only in jpeg,svg,jpg and png format',
                'image.max'=>'Image size not more than 6mb',
            ]);

            $image = $request->file('image');
            $file_name = $image->getClientOriginalName();
            $file_name=uniqid().$file_name;
            $upload_path = 'img/';
            $image_url = $file_name;
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(1280, 1050);
            $image_resize->save($upload_path.$file_name);
        }
        
        $data=[
            'title'=>$request->get('title'),
            'body'=>$request->get('body'),
            'image'=>$image_url,
            'writer_id'=>$writer_id,
            'created_at'=>$created_at
        ];
        Post::create($data);
        return redirect()->back()->with('success','Successfully Added...!');
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
        return view('writer.view',compact('posts'));
    }

    public function AjaxView(Request $request)
    {
        $id=$request->id;
        $data= Post::where('id', '=', $id)->first();
        return response()->json(['result'=> $data]);
    }

    public function AjaxEdit(Request $request)
    {
        $id=$request->id;
        $dat=Post::where('id','=', $id)->get();
        return response()->json(['result'=> $data]);
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
