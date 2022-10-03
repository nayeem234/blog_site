<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newses;

class newsController extends Controller
{
    function index()

    {
        $data = Newses::latest()->get();
        return view('backend.news',compact('data'));
        //return view('news_data');
    }
    function store(Request $request)
    {
        // return $request->all();
        $news = new Newses();
        $news->title = $request->title;
        // $post->image = $request->title;
        $news->description = $request->description;
        $news->save();
        return redirect()->back();
    }
    function delete($id){
        Newses::findorfail($id)->delete();
        return "delete suceesfully";

    }
    function add_model(){
        return view('backend.add_news');
    }
    function preview($id)
    {
        return Newses::where('id', '=', $id)->get();

    }
    function edit(Request $request)
    {
        // return $request->all();
        $news = Newses::findOrfail($request->editId);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->update();
        return redirect()->back();

    }

}
