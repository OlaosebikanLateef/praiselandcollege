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

       public function loginn(Request $request)
       {
           return view('loginn');
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

// public function submitLogin(Request $request)
// {
 
//     $request->validate([
//         'email'=>'required',
//         'password'=> 'required'
//     ]);
//     $user = User::where('email', '=', $request->email)->first();
//     if($user) {
//         if(Hash::check($request->password, $user->password)) {
//             $request->Session()->put('loginId', $user->id);
//             return redirect('dashboard');
//         } else {
//             return back()->with('fail', 'Password do not match.');
//         }
//     } else {
//         return back()->with('fail', 'This email is not registered.');
//     }
// }

// public function submitLogin(Request $request)
//     {
//         $credentials = $request->only('email', 'password');
        
//         if (Auth::attempt($credentials)) {
//             // Authentication successful
//             return redirect()->intended('/dashboard');
//         } else {
//             // Authentication failed
//             return back()->withErrors(['message' => 'Invalid credentials']);
//         }
//     }
    public function submitLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->user_type == 1){
                return redirect()->intended('dashboard');
            }

            else if(Auth::user()->user_type == 2){
                return redirect()->intended('getUsers');
            }

            else if(Auth::user()->user_type == 2){
                return redirect()->intended('resultUpload');
            }

            else if(Auth::user()->user_type == 2){
                return redirect()->intended('resultUpload');
            }

            else if(Auth::user()->user_type == 1){
                return redirect()->intended('results');
            }
 
            //return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


 public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
 
}

