<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Blog::where('user_id',Auth::id())->get(); 
        return view('home.user_blog',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist=Category::with('children')->get();
        return view('home.user_blog_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Blog();
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->slug=$request->input('slug');
        $data->status=$request->input('status');
        $data->image=Storage::putFile('images',$request->file('image')); // Dosya yükleme
        $data->category_id=$request->input('category_id');
        $data->user_id=Auth::id();
        $data->content=$request->input('content');
        $data->author_name=$request->input('author_name');
        $data->author_job=$request->input('author_job');
        $data->tags=$request->input('tags');
        $data->references=$request->input('references');
        $data->save();
        
        return redirect()->route('user_blogs')->with('success','Blog Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog,$id)
    {
        $data=Blog::find($id);
        $datalist=Category::with('children')->get();
        return view('home.user_blog_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog,$id)
    {
        $data=Blog::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->slug=$request->input('slug');
        $data->status=$request->input('status');
        $data->category_id=$request->input('category_id');
        $data->user_id=Auth::id();
        $data->content=$request->input('content');
        $data->author_name=$request->input('author_name');
        $data->author_job=$request->input('author_job');
        $data->tags=$request->input('tags');
        $data->references=$request->input('references');

        if($request->file('image')!=null)
        {
            $data->image=Storage::putFile('images',$request->file('image')); // Resim Yükleme
        }

        $data->save();

        return redirect()->route('user_blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog,$id)
    {
        $data=Blog::find($id);

        $data->delete();
        return redirect()->route('user_blogs');
    }
}
