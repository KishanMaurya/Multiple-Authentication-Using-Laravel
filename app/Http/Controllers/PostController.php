<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Response;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.user_post');
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
        $user_id=Auth::user()->id;
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
            'post_id'=>$user_id,
            'created_at'=>$created_at

        ];
        Post::create($data);

        return redirect()->back()->with('success','Successfully Added...!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        $posts=Post::where('post_id' , Auth::user()->id)->get();
        return view('user.post_view',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
    public function UserDash()
    {
        return view('home');
    }
}
