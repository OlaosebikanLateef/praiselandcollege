<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\subject;
use App\Models\User;
use Illuminate\support\Facades\Auth;

class ResultController extends Controller
{
    public function resultUpload(Request $request){
    
    $subject = Subject::get();

    return view('resultUpload')->with(['subject'=> $subject]);
}
   


        public function result(Request $request){
         $user = Auth::user();

        // $result = Result::all();
        $result = Result::where('user_id', $user->id)->get();
       // $subject = Subject::where('id', $result->subject_id)->get();
           // return view('results', compact('data', 'result'));
            return view('results', compact('user', 'result'));
    }
    


    public function submitResult(Request $request){
       
        $attributes = $request->validate([
            'subject_id' => 'required',
            'exam' => 'required',
            'test' => 'required',
            'total' => 'required',
            'grade' => 'required',
            'user_id'=>'required'
        ]);
       
        Result::create([
                'subject_id'=>$request->subject_id,
                'exam'=>$request->exam, 
                'test'=>$request->test,
                'total'=>$request->total,
                'grade'=>$request->grade,
                'user_id'=>$request->user_id,
               
        ]);
    
        return back()->with('msg', '<div class="alert alert-success"><span>Result Submitted Successfully</span></div>');
    }

 
    public function viewResult(){
        
        $datas = Result::get();
        
        return view('results', compact('datas'));
       } 

    


}
