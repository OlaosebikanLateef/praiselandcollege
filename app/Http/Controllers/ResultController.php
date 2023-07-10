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
          //  dd($request->all());
        $attribute = $request->validate([    
        'subject_id'=>'required',   
        'exam'=>'required',
        'test'=>'required',
        'total'=>'required',
        'grade'=>'required',
        'user_id'=>'required'

        ]);

        result::create([
            'subject_id'=>$request->subject_id,
            'exam'=>$request->exam, 
            'test'=>$request->test,
            'total'=>$request->total,
            'grade'=>$request->grade,
            'user_id'=>$request->user_id
        ]);
       
        return back()->with("msg", "<div class='alert alert-success'> <span>Submitted Successfully </span> </div>");
    }
   
    //     $attributes = $request->validate([
    //         dd($request->all());
    //         'subject_id' => 'required',
    //         'exam' => 'required',
    //         'test' => 'required',
    //         'total' => 'required',
    //         'grade' => 'required'
    //     ]);
    
    //     Result::create([
        
    //         'subject_id' => $request->input('subject_id'),
    //         'exam' => $request->input('exam'),
    //         'test' => $request->input('test'),
    //         'total' => $request->input('total'),
    //         'grade' => $request->input('grade')
    //     ]);
    
    //     return back()->with('msg', '<div class="alert alert-success"><span>Submitted Successfully</span></div>');
    // }


}
