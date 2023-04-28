<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function signUp(Request $request){
        return view('signUp');
    }

    //function to collect data from form
    public function submitSignUp(Request $request){
        
        $attribute = $request->validate([
        'firstName'=>'required',
        'lastName'=>'required',
        'email'=>'required',
        'password'=> 'required',
        'confirmPassword'=> 'required',
        'gender'=> 'required'

        ]);
        
        if($request->password != $request->confirmPassword){
            return back()->with("msg", "<div class='alert alert-danger'> <span> Password Incorrect </span> </div>");
        };
        
        $user = User::where('email', $request->email)->first();

        if(isset($user)){
            return back()->with("msg", "<div class='alert alert-danger'> <span> Email Already Exist </span> </div>");
        };


        $password = Hash::make($request->password);
        $confirmPassword = Hash::make($request->confirmPassword);

        User::create([
            'firstname'=>$request->firstName, 
            'lastname'=>$request->lastName,
            'email'=>$request->email,
            'password'=>$password,
            'confirmPassword'=>$confirmPassword,
            'gender'=>$request->gender
        ]);
        return back()->with("msg", "<div class='alert alert-success'> <span> Sign Up Successfully </span> </div>");
    }

}    