<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogPost;
use App\Models\Newses;

class frontendController extends Controller
{
    function front()
    {
        $postData = blogPost::latest()->get();

        return view('frontend.home', [
            'postData' => $postData
        ]);
    }
    function news()
    {
        $newsData = Newses::latest()->get();
        return view('frontend.news', [
            'newsData' => $newsData
        ]);
    }
}
