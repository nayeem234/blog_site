<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login(Request $request){


        $data=$request->only(['email','password']);
      if(($data)){
        return redirect()->intended('/backend');
      }
      return redirect()->to('/login');

    }
    public function logout(){
       return  'logout successfully';
    }
}
