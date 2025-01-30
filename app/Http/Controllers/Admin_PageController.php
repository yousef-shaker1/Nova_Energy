<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_PageController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function price_page(){
        return view('admin.price');
    }

    public function user_page(){
        return view('admin.user');
    }
}
