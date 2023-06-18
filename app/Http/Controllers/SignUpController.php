<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use App\Models\Hostel;
use App\Models\Classes;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function signUp(Request $request){
        $hostel = Hostel::get();
        $class = Classes::get();
        $data = [
                'hostel'=> $hostel, 
                'class' => $class
        ];
        return view('signUp')->with(['data'=>$data]);
    }

    //function to collect data from form
    public function submitSignUp(Request $request){
        //dd($request->all());
        $attribute = $request->validate([
        'firstName'=>'required',
        'lastName'=>'required',
        'email'=>'required',
        'password'=> 'required',
        'dateOfBirth'=>'required',
        'department'=>'required',
        'hostel_id'=>'required',
        'class_id'=> 'required',
        'gender'=> 'required'

        ]);
        
        $user = User::where('email', $request->email)->first();
        if(isset($user)){
            return back()->with("msg", "<div class='alert alert-danger'> <span> Email Already Exist </span> </div>");
        };


        $password = Hash::make($request->password);
      

        User::create([
            'firstName'=>$request->firstName, 
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'password'=>$password,
            'dateOfBirth'=>$request->dateOfBirth,
            'department'=>$request->department,
            'hostel_id'=>$request->hostel_id,
            'class_id'=>$request->class_id,
            'gender'=>$request->gender
        ]);
        return back()->with("msg", "<div class='alert alert-success'> <span> Sign Up Successfully </span> </div>");
    }
// public function submitSignUp(Request $request){     
//     $request->validate([
//         'firstName'=>'required',
//         'lastName'=>'required',
//         'email'=>'required',
//         'password'=> 'required',
//         'dateOfBirth'=>'required',
//         'department'=>'required',
//         'image'=> 'required',
//         'gender'=> 'required'

//         ]);
//         $user = new User();
//         $user ->firstName = $request->firstName;
//         $user ->lastName = $request->lastName;
//         $user ->email = $request->email;
//         $user ->password = $request->password;
//         $user ->dateOfBirth = $request->dateOfBirth;
//         $user ->department = $request->department;
//         $user ->image = $request->image;
//         $user ->gender = $request->gender;
//         $result = $user->save();
}
