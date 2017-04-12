<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddQuestion;
use App\Question;
use App\Cat;
use Auth;
class QuestionController extends Controller {

    
    public function index() {
//        $questions = Question::orderBy('id', 'DESC')->get();
        $questions = Question::orderBy('id', 'DESC')->paginate(5);
        $cats = Cat::all();
        return view('questions', compact('questions', 'cats'));
    }

   
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



    public function add_question(AddQuestion $request) {
        
        Common::globalXssClean($request);
        $question = new Question;
        $question->title = $request->title;
        $question->desc = $request->desc;
        $question->cat_id = $request->cat_id;
        $question->user_id = Auth::id();
        if ($request->hasFile('img')) {
            $question->img = $request->file('img')->store("images/questions");
        }
        $question->save();
        return redirect('/questions');
    }

   

}
