<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class DashboardController extends Controller
{
    public function viewDashboard(Request $request){
        $data = User::get();
        return view('dashboard')->with(['data'=>$data]);
    }
}
