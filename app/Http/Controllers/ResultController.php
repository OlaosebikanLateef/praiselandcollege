<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\subject;

class ResultController extends Controller
{
    public function resultUpload(Request $request){
    
    $subject = Subject::get();

    return view('resultUpload')->with(['subject'=> $subject]);
}
        
    

    public function submitResult(Request $request){
        
        $attribute = $request->validate([
        'subject'=>'required',   
        'exam'=>'required',
        'test'=>'required',
        'total'=>'required',
        'grade'=>'required'

        ]);

        Result::create([
            'subject'=>$request->subject,
            'exam'=>$request->exam, 
            'test'=>$request->test,
            'total'=>$request->total,
            'grade'=>$request->grade
        ]);
        return back()->with("msg", "<div class='alert alert-success'> <span>Submitted Successfully </span> </div>");
    }



}
