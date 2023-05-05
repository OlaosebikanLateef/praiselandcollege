<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUsers(Request $request){
        $data = User::get();
        return view('users')->with(['data'=>$data]);
    }

    public function editUsers(Request $request, $id){
        $data = User::where('id', $id)->first();
        return view('editUsers')->with(['data'=>$data]);
    }
   
    public function deleteUser(Request $request, $id){
        $data = User::where('id', $id)->delete();
        return back()->with("msg", "<div class='alert alert-success'> <span> Deleted Successfully </span> </div>");
    }

    public function  updateUser(Request $request, $id){
        $attribute = $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'gender'=>'required'
          ]);
          $data = User::where('id', $id)->update([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'gender'=>$request->gender
          ]);
          return back()->with("msg", "<div class='alert alert-success'> <span> Updated Successfully </span> </div>");
        }
}

    