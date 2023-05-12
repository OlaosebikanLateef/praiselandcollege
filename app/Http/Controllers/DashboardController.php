<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class DashboardController extends Controller
{
    public function dashboard(Request $request){
        return view('dashboard');
    }
    public function profile(Request $request, $id){
        $data = User::where('id', $id)->first();
        return view('profile')->with(['data'=>$data]);
    }

    public function result(Request $request){
        return view('result');
    }
}
