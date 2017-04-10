<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Rating;

use Auth;

use Response;

use carbon\Carbon;

class CompanyController extends Controller
{
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
    public function index($id)
    {
        $user = User::find($id);
        $user_comments= Rating::where('company_id', '=', $id)->where('status' , '!=', 1)->orderBy('created_at','ASC')->get();

        $login_user= 1; //Auth::id()
        $user_status= Rating::where('company_id', '=', $id)->where('user_id', '=', $login_user)->where('status' , '=', '0')->first();
        if($user_status == ''){
            $status=false;
        }else{
            $status=true;
        }
        return view('company', compact('user', 'user_comments', 'status'));
    }

    public function rate_company(Request $request)
    {   
        $this->validate(request() ,[
            'company_id' => 'required',
            'review'=> 'required',
            'stars' => 'required'
        ],['required'=>"برجاء ادخال تعليقك"]);

        Carbon::setLocale('ar');

        $review_before = Rating::where("user_id","=", 1)->where("company_id","=", $request->company_id)->where("status","=", '1')->first(); //Auth::id()
        if( $review_before ){
                return Response::json(['error' => 'لقد تم عمل تقيم من قبل'], 404); // Status code here
        }

        $review = Rating::where("user_id","=", 1)->where("company_id","=", $request->company_id)->where("status","=", '0')->first();
            if( !$review ){
                return Response::json(['error' => 'لم يتم التواصل من قبل'], 404); // Status code here

            }else{
            $review->stars=$request->stars;
            $review->review=$request->review;
            $review->created_at= \DB::raw('CURRENT_TIMESTAMP');
            $review->status='1';
            $review->save();
            }
            return redirect('company/'.$request->company_id);
        
    }
}
