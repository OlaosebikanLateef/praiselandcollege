<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUsers(Request $request){
        $data = User::get();
        $user = Auth::user();
        return view('users', compact('user'))->with(['data'=>$data]);
    }                     
   
    public function deleteUser(Request $request, $id){
        $data = User::where('id', $id)->delete();
        return back()->with("msg", "<div class='alert alert-success'> <span> Deleted Successfully </span> </div>");
        
    }


        public function editUsers(){
            $data = Auth::user();
            return view('editUsers', compact('data'));
        }

        public function updateUser(Request $request, $id){


            $data = auth()->user();
    
            $data = $request->validate([
                'firstName'=>'required',
                'lastName'=>'required',
                'email'=>'email',
                'gender'=>'required'
            ]);

            $data = User::where('id', $id)->update([
                'firstName'=> $request->firstName,
                'lastName'=> $request->lastName,
                'email'=> $request->email,
                'gender'=> $request->gender
            ]);

            return back()->with("msg", "<div class='alert alert-success'> <span>Updated Successfully</span> </div>");
         }  
              
    
}

    