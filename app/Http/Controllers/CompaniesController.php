<?php

namespace App\Http\Controllers;

use App\Company_detail;
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
        $companies = User::where('group_id', '=', 2)->paginate(8);

        //GET LASTEST COMPANIES ADDED
        $latest_added = User::where('group_id', '=', 2)->limit(20)->orderBy('id', 'DESC')->get();

        $top_rated = Company_detail::limit(20)->orderBy('rating', 'DESC')->get();

        return view('companies', compact('companies', 'latest_added', 'top_rated'));
    }

    public function search(Request $request) {

        $searchKey = $request->key;
        
        if ($searchKey != "") {
            $companies = User::where('name', 'LIKE', '%' . $searchKey . '%')->where('group_id', '=', 2)->get();
            
            for($i = 0; $i < count($companies); $i++){
                $companies[$i]->rating = $companies[$i]->company->rating;
            }
             return response()->json($companies, 200);
        }
    }

}
