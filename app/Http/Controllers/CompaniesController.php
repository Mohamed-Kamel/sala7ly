<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CompaniesController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //GET ALL COMPANIES
        $companies = User::where('group_id', '=', 2)->get();

        //GET LASTEST COMPANIES ADDED
        $latest_added = User::where('group_id', '=', 2)->orderBy('id', 'DESC')->get();

        //GET TOP RATED COMPANIES
        $top_rated = User::where('group_id', '=', 2)->get();
        $des = [];
        foreach ($top_rated as $top) {
            $des[] = $top->company->total_rating;
        }
        $top = $des;
        rsort($des);
        return view('companies', compact('companies', 'latest_added', 'top_rated'));
    }

    public function search(Request $request) {

        
        $searchKey = $request->key;
        
        if ($searchKey != "") {
            $companies = User::where('name', 'LIKE', '%' . $searchKey . '%')->where('group_id', '=', 2)->get();
            
            for($i = 0; $i < count($companies); $i++){
                $companies[$i]->total_rating = $companies[$i]->company->total_rating;
            }
            
             return response()->json($companies, 200);
        }
    }

}
