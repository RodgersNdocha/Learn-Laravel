<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
     public function blog(){
        return view('blog');
    }
    public function blogdetails(){
        return view('blogdetails');
    }
}
