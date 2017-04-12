<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
class QuestionController extends Controller
{

   
    public function changeStatus(Request $request,$id){
         $question = Question::find($id);
          if ($request->status ==='open')
          { 
             $question->status = 'closed';
             $question->save();
        }
        elseif( $question->status === 'closed'){
             $question->status = 'open';
             $question->save();
            }
            else{
             $question->save();
            }
           return response()->json(['success'=>"success"], 200);
        } 

        public function showQuestion(Request $request, $id){

        $question = Question::find($id);

         $results = Question::where('title', 'LIKE', '%'.$question->title.'%')

         ->where('title', '<>', $question->title)

         ->limit(10)->get();

         return view('question', compact('question','results'));
    }
}
