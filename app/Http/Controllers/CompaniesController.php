<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company_detail;

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
    public function index(Request $request) {
        //GET ALL COMPANIES
        if ($request->top) {
            $top_rated = Company_detail::limit(20)->orderBy('rating', 'DESC')->get();
            for ($i = 0; $i < count($top_rated); $i++) {
                $top_rated[$i]->id = $top_rated[$i]->user->id;
                $top_rated[$i]->name = $top_rated[$i]->user->name;
                $top_rated[$i]->city = $top_rated[$i]->user->city;
                $top_rated[$i]->img = $top_rated[$i]->user->img;
            }
            return response()->json($top_rated, 200);
        } elseif ($request->latest) {
            //GET LASTEST COMPANIES ADDED
            $latest_added = User::where('group_id', '=', 2)->limit(20)->orderBy('id', 'DESC')->get();
            for ($i = 0; $i < count($latest_added); $i++) {
                $latest_added[$i]->rating = $latest_added[$i]->company->rating;
            }

            return response()->json($latest_added, 200);
        } elseif($request->all){
            $companies = User::where('group_id', '=', 2)->get();
            for ($i = 0; $i < count($companies); $i++) {
                $companies[$i]->rating = $companies[$i]->company->rating;
            }
            return response()->json($companies, 200);
        }else{
            $companies = User::where('group_id', '=', 2)->get();
            return view('companies', compact('companies'));
        }
    }

    public function search(Request $request) {


        $searchKey = $request->key;

        if ($searchKey != "") {
            $companies = User::where('name', 'LIKE', '%' . $searchKey . '%')->where('group_id', '=', 2)->get();

            for ($i = 0; $i < count($companies); $i++) {
                $companies[$i]->rating = $companies[$i]->company->rating;
            }

            return response()->json($companies, 200);
        }
    }

}
