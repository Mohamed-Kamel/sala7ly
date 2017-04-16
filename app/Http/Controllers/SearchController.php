<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use App\Question;
use DB;
class SearchController extends Controller
{
    /**
     * Search for questions general navbar search
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function questions(Request $request){
        // clean the request from XSS
        Common::globalXssClean($request);
        $results = Question::where('title', 'LIKE', '%'.$request->question.'%')
            ->orWhere('desc', 'LIKE', '%'.$request->question.'%')
            ->paginate(4);
        return view('search', compact('results'));
    }

    /**
     * get questions by cat id
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function catQuestions($id)
    {
        // @TODO: slug instead of ids
        $questions = Question::where('cat_id', '=', $id)->paginate(5);
        $cats = Cat::all();
        return view('questions', compact('questions', 'cats'));
    }

    /**
     * method to search for questions advancedly
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function advancedSearch(Request $request){
        Common::globalXssClean($request);
        $query = DB::table('questions')
            ->select(['cats.title AS cat_name', 'questions.*', 'users.*'])
            ->join('users', 'users.id', '=', 'questions.user_id')
            ->join('cats', 'cats.id', '=', 'questions.cat_id');

//        $query->where(function($query) use ($request){
            foreach ($request->all() as $key => $value){
                switch ($key){
                    case 'open':
                        $query->where('status', '=', 'open');
                    break;

                    case 'last':
                        $query->orderBy('questions.id', 'DESC');
                    break;

                    case 'advancedSearch':
                        $query->where('questions.title', 'LIKE', '%'.$value.'%')->orWhere('questions.desc', 'LIKE', '%'.$value.'%');
                    break;
                }
            }
//        });

//        dd($request->all());
        $query->where(function($query) use ($request){
            foreach ($request->all() as $key => $value){
                if(!($key == 'all' || $key == 'open' || $key == 'last' || $key == 'advancedSearch') ){
                    $query->orWhere('users.city', '=', $value);
                }
            }
        });
//        echo $query->toSql();
//        exit;
        $questions = $query->paginate(5);

        foreach ($questions as $question){
            $question->numOfComments = Question::find($question->id)->allComments->count();
        }
        $cats = Cat::all();

        return view('advancedSearch',[
            'questions' => $questions->appends($request->except('page')),
            'cats' => $cats
        ]);

//        return view('advancedSearch', compact('questions', 'cats'));
    }

/*
    public function apply(Request $filters){
        $question = (new Question)->newQuery();

        $question->where(function($question) use ($filters) {
            if ($filters->has('open')) {
                $question->where('status', $filters->get('open'));
            }

            if ($filters->has('last')) {
                $question->orderBy('id', 'DESC');
            }
        });

        $question->where(function($question) use ($filters) {
            if ($filters->has('advancedSearch')) {
                $question->where('title', 'LIKE', '%'.$filters->get('advancedSearch').'%')
                          ->orWhere('desc', 'LIKE', '%'.$filters->get('advancedSearch').'%');
            }
        });

        $question->where(function($question) use ($filters) {
            foreach ($filters->all() as $key => $value) {
                if ($key != 'open' && $key != 'top' && $key != 'advancedSearch' && $key != 'all') {
                    $question->orWhere('users.city', $value);
                }
            }
        });

        $questions = $question->get();
        echo $question->toSql;
        exit;
        return $questions;
    }
*/

    public function apply(Request $request){
        Common::globalXssClean($request);
        $query = DB::table('questions')
            ->select(['cats.title AS cat_name', 'questions.*', 'users.*'])
            ->join('users', 'users.id', '=', 'questions.user_id')
            ->join('cats', 'cats.id', '=', 'questions.cat_id')
            ->where(function($query) use ($request) {
                if ($request->has('open')) {
                    $query->where('questions.status', $request->get('open'));
                }

                if ($request->has('last')) {
                    $query->orderBy('questions.id', 'DESC');
                }
            })->where(function($query) use ($request) {
                if ($request->has('advancedSearch')) {
                    $query->where('questions.title', 'LIKE', '%'.$request->get('advancedSearch').'%')
                        ->orWhere('questions.desc', 'LIKE', '%'.$request->get('advancedSearch').'%');
                }
            })->where(function($query) use ($request) {
                foreach ($request->all() as $key => $value) {
                    if ($key != 'open' && $key != 'last' && $key != 'advancedSearch' && $key != 'all') {
                        $query->orWhere('users.city', $value);
                    }
                }
            });
        $questions = $query->get();
//        $questions = $query->paginate(5);
//        echo $query->toSql();
//        exit;

        foreach ($questions as $question){
            $question->numOfComments = Question::find($question->id)->allComments->count();
        }
        $cats = Cat::all();

//        return view('advancedSearch',[
//            'questions' => $questions->appends($request->except('page')),
//            'cats' => $cats
//        ]);
        return view('advancedSearch', compact('questions', 'cats'));
    }
}
