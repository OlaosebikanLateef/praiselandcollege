<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    public function resultUpload(){
        return view('resultUpload');
    }

    public function submitResult(Request $request){
        
        $attribute = $request->validate([
        'firstName'=>'required',
        'lastName'=>'required',
        'email'=>'required',

        ]);
        
        if($request->password != $request->confirmPassword){
            return back()->with("msg", "<div class='alert alert-danger'> <span> Password Incorrect </span> </div>");
        };
        
        $result = Result::where('email', $request->email)->first();
        if(isset($user)){
            return back()->with("msg", "<div class='alert alert-danger'> <span> Email Already Exist </span> </div>");
        };


   

        Result::create([
            'firstname'=>$request->firstName, 
            'lastname'=>$request->lastName,
            'gender'=>$request->gender
        ]);
        return back()->with("msg", "<div class='alert alert-success'> <span> Sign Up Successfully </span> </div>");
    }

}
