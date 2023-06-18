<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

use function GuzzleHttp\Promise\all;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

       public function adminLogin(Request $request)
       {
           return view('adminLogin');
       }
//login function (query must be written to validate the data and adding 'use Illuminate\Support\Facades\Auth;' )
// public function submitLogin(Request $request){
//     //dd($request->all());
//     $attribute = $request->validate([
//         'email'=>'required',
//         'password'=>'required'
//     ]);

//     if(!Auth::attempt($attribute)){
//         return back()->with("msg", "<div class='alert alert-danger'> <span> Password or Email is Incorrect </span> </div>");
//     }else{
//         $data = User::where('email', $request->email)->first();
//         return view('dashboard')->with(['data' => $data]);
//     }
// }

public function submitLogin(Request $request)
{
    $request->validate([
        'email'=>'required',
        'password'=> 'required'
    ]);
    $user = User::where('email', '=', $request->email)->first();
    if($user) {
        if(Hash::check($request->password, $user->password)) {
            $request->Session()->put('loginId', $user->id);
            return redirect('dashboard');
        } else {
            return back()->with('fail', 'Password do not match.');
        }
    } else {
        return back()->with('fail', 'This email is not registered.');
    }
}



 public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
 
}

