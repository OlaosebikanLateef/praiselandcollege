<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        return view('login');
       }

       
//login function (query must be written to validate the data and adding 'use Illuminate\Support\Facades\Auth;' )
public function submitLogin(Request $request){
    $attribute = $request->validate([
        'email'=>'required',
        'password'=>'required'
    ]);
    if(!Auth::attempt($attribute)){
        return back()->with("msg", "<div class='alert alert-danger'> <span> Password or Email is Incorrect </span> </div>");
    }else{
        
        return view('dashboard');
    }
}

}

