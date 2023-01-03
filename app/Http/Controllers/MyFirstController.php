<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MyFirstController extends Controller
{
    public function home(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function fruit(){
        return view('fruit');
    }
    public function testimonial(){
        return view('testimonial');
    }
    public function login(){
        return view('login');
    }
    
}
