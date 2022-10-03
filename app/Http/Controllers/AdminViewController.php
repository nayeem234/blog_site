<?php

namespace App\Http\Controllers;

use App\Models\blogPost;
use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function index(){

        return ("welcome to view");
    }

    public function AddDataView(){
        return view('add_data');
    }
    public function AddDataStore(Request $request){
        $data = new blogPost();
        $data->category  = $request->category;
        $data->title = $request->title;
        $data->description=$request->description;
        $data->save();
        return $request->all();

    }
}
