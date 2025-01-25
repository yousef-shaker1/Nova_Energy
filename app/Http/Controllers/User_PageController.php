<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_PageController extends Controller
{
    public function index(){
        return view('user_page.home');
    }

    public function about(){
        return view('user_page.about');
    }

    public function services(){
        return view('user_page.services');
    }

    public function portfolio(){
        return view('user_page.portfolio');
    }

    public function team(){
        return view('user_page.team');
    }

    public function blog(){
        return view('user_page.blog');
    }

    public function contact(){
        return view('user_page.contact');
    }
}
