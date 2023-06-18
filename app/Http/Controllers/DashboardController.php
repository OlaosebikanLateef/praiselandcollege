<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hostel;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
public function dashboard(Request $request){
   // dd($request->all());
  
    $data = array();
    if(session::has('loginId')){
        $data = User::where('id', '=', session::get('loginId'))->first();
    }
    return view('dashboard', compact('data'));
}

public function dashboar(Request $request){
    $user = Auth::user();
    $hostel = $user->hostel;
    $classes = $user->classes;
    $teacher = $user->teacher;

    return view('dashboard', compact('hostel', 'classes', 'teacher'));

}

}
