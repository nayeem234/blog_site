<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogPost;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class postController extends Controller
{
    function index()
    {
        return view('backend.add_data');
    }
    function store(Request $request)
    {
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $file = Image::make($request->image)->resize(1200, 800)->stream();
        Storage::disk('public')->put('blogPost' . '/' . $imageName, $file);

        $post = new blogPost();
        $post->title = $request->title;
        $post->image =  $imageName;
        $post->description = $request->description;
        $post->save();
        return redirect()->back();
    }
    function delete($id)
    {
        blogPost::findOrFail($id)->delete();
        return "Delete success";
    }
    function preview($id)
    {
        return blogPost::where('id', '=', $id)->get();
    }

    function edit(Request $request)
    {
        $imageName = time() . '.' . $request->editImage->getClientOriginalExtension();
        $file = Image::make($request->editImage)->resize(1200, 800)->stream();
        Storage::disk('public')->put('blogPost' . '/' . $imageName, $file);

        $post = blogPost::findOrfail($request->editId);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image =  $imageName;
        $post->update();
        return redirect()->back();
    }
}
