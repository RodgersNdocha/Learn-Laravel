<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;

class Testcontroller extends Controller
{
    public function index(){
        
    return view('admin.pages.dashboard');
    }
}
