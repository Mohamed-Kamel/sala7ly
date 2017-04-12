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

    public function add_question(AddQuestion $request) {
        //todo validate request
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

    public function showQuestion($id) {
        $question = Question::find($id);
        return view('question', compact('question'));
    }

}
