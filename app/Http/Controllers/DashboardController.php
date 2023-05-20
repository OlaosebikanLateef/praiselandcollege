<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    // public function dashboard(Request $request){
    //     return view('dashboard');
    // }
    // public function profile(Request $request, $id){
    //   // dd($request->all());
    //     $data = User::where('id', $id)->first();
        
    //     return view('profile')->with(['data'=>$data]);
    // }

    public function profile(){
        $data = User::all();
        return view('profile', compact('data'));
    }

    public function  userProfile(Request $request, $id){
        $attribute = $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'gender'=>'required'
          ]);
          return back()->with("msg", "<div class='alert alert-success'> <span> Welcome to your profile page </span> </div>");
        }

    public function result(Request $request){
        return view('result');
    }

    public function adminAccess(Request $request){
        return view('adminAccess');
    }

//     public function index(){
//     $user = auth()->user(); // Retrieve the authenticated user
//     return view('dashboard', compact('user'));
// }
public function dashboard(){
    $user = Auth::user();
    return view('dashboard', compact('user'));
}
}
