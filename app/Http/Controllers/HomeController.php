<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view("home");
    }
    
    public function dashboard()
    {
        return view("Admin/dashboard");
    }

    Public function indexHome(){
        $blogs = Blog::where("blog_status",1)->get();
        return view('home/index', ["blogs" => $blogs]);
    }
    Public function about(){
        return view('home/about');
    }
    Public function contact(){
        return view('home/contact');
    }
    Public function services(){
        return view('home/services');
    }
    Public function blogs(){
        return view('home/blogs');
    }
    Public function sendcontact(Request $request){
      echo "<pre>";print_r($request->all());die;
    }
}
