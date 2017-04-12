<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class SearchController extends Controller
{
    /**
     * Search for questions
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

}
