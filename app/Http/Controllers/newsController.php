<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
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
        $imageName=time().'.'.$request->editImage->getgetClientOriginalExtension();
        $file=Image::make($request->image)->resize(1200,800)->stream();
        Storage::disk('public')->put('newsses' . '/' . $imageName, $file);

        $news = Newses::findOrfail($request->editId);
        $news->title = $request->title;
        $news->image =  $imageName;
        $news->description = $request->description;
        $news->update();
        return redirect()->back();

    }

}
