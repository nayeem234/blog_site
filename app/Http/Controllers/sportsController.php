<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sports;


class sportsController extends Controller
{
    function index()
    {
        $data = sports::latest()->get();
        return view('backend.sports', compact('data'));
    }
    function store(Request $request)
    {
        $sports = new sports();
        $sports->title = $request->title;
        $sports->description = $request->description;
        $sports->save();
        return redirect()->back();
    }
    function delete($id)
    {
        sports::findorfail($id)->delete();
        return redirect()->back();
    }
    function add_sports()
    {
        return view('backend.add_sports');
    }

    function preview($id)
    {
        return sports::where('id', '=', $id)->get();
    }

    function edit(Request $request)
    {
        // return $request->all();
        $sports = sports::findOrfail($request->editId);
        $sports->title = $request->title;
        $sports->description = $request->description;
        $sports->update();
        return redirect()->back();
    }
}
