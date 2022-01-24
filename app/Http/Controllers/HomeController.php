<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Blog;


class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id','=', 0)->with('children')->get();
    }

    public static function getsetting(){
        return Setting::first();
    }

    public function index()
    {
        $setting=Setting::first();
        $slider=Blog::select('id','category_id','title','image','author_name','slug')->limit(4)->get();
        $daily=Blog::select('id','category_id','title','image','author_name','slug')->limit(4)->inRandomOrder()->get();
        $last=Blog::select('id','category_id','title','image','author_name','slug')->limit(4)->inRandomOrder('id')->get();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
            'last'=>$last,
        ];

        return view('home.index',$data);
    }

    public function blog($id,$slug)
    {
        $data=Blog::find($id);
       
    }

    public function gotoblog($id)
    {
        $data=Blog::find($id);
       
    }

    public function categoryblogs($id,$slug)
    {
        $datalist=Blog::where('category_id',$id)->get();
        $data=Category::find($id);
        return view('home.category_blogs',['data'=>$data,'datalist'=>$datalist]);
    }

    public function aboutus()
    {
        $setting=Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function contact()
    {
        $setting=Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data=new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Mesajınız Kaydedilmiştir. Teşekkür Ederiz..');
    }
    
    public function faq()
    {
        return view('home.faq');
    }

    public function references()
    {
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        
        if ($request->isMethod('post')) {
            $credentails=$request->only('email','password');
            if(Auth::attempt($credentails))
            {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The provided credentials do not match our records'
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
