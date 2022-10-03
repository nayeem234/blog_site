<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogPost;

class backendController extends Controller
{
    public function backend(){
        $data = blogPost::latest()->get();
        return view('backend.dashbord',compact('data'));
    }
}
