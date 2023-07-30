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

