<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Rating;

use Auth;

use Response;

use carbon\Carbon;

use Illuminate\Foundation\Auth\RegisterController;


class CompanyController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::find($id);
        if(!isset($user) || !isset($user->company)){
            echo "لا يوجد شركة ";
        }
        else if($user->group_id == '2'){

            $user_comments = Rating::where('company_id', '=', $id)->where('status', '!=', 1)->orderBy('created_at', 'ASC')->get();

            $login_user = Auth::id();
            $user_status = Rating::where('company_id', '=', $id)->where('user_id', '=', $login_user)->where('status', '=', '0')->first();

            $user_status1 = Rating::where('company_id', '=', $id)->where('user_id', '=', $login_user)->where('status', '=', '1')->first();
            if ($user_status == '') {
                $status = false;
            } else {
                $status = true;
            }
            if ($user_status1 != '') {
                $status = true;
            }
            return view('company', compact('user', 'user_comments', 'status'));
        }else{
            echo "لا يوجد شركة ";
        }
        
    }

    public function rate_company(Request $request)
    {
        $this->validate(request(), [
            'company_id' => 'required',
            'review' => 'required',
            'stars' => 'required'
        ], ['required' => "برجاء ادخال تعليقك"]);

        $review_before = Rating::where("user_id", "=", Auth::id())->where("company_id", "=", $request->company_id)->where("status", "=", '1')->first(); 
        if ($review_before) {
            return Response::json(['error' => 'لقد تم عمل تقيم من قبل'], 404); // Status code here
        }

        $review = Rating::where("user_id", "=", 1)->where("company_id", "=", $request->company_id)->where("status", "=", '0')->first();
        if (!$review) {
            return Response::json(['error' => 'لم يتم التواصل من قبل'], 404); // Status code here

        } else {
            $review->stars = $request->stars;
            $review->review = $request->review;
            $review->created_at = \DB::raw('CURRENT_TIMESTAMP');
            $review->status = '1';
            $review->save();
        }
        return redirect('company/' . $request->company_id);

    }
    public function editProfile(Request $request){
        $this->validate(request(), [
            'name'           => 'required|string|min:5|max:50',  
            'phone'          => 'required|regex:/[0-9+]+/|min:8|max:14|string',
            'img'     => 'mimes:jpeg,jpg,png,gif',
            'cover'   => 'mimes:jpeg,jpg,png,gif',
        ], [    'required'      => 'يجب ادخال هذا الحقل ',
                'name.min'      => ' الاسم يجب ان يكون اكبر من 5 حروف',
                'name.string'   => ' برجاء ادخال الاسم صحيح',
                'email.Email'   => ' يجب ادخال البريد الاليكترونى بطريقه صحيحه',
                'email.unique'  =>'عفوا هذا البريد الاليكترونى موجود مسبقا',
                'phone.min'     =>'عفوا يجب ادخال رقم التليفون صحيح',
                'phone.numeric' =>'عفوا يجب ادخال رقم التليفون صحيح',
                ]);

        $user= User::find(Auth::id());
        $user->name=$request->name;
        if($request->hasFile('img')){
            $user->img=$request->file('img')->store('images/profile');
        }
        if($request->hasFile('cover')){
            $user->cover=$request->file('cover')->store('images/cover');
        }
        $user->phone=$request->phone;
        $user->city=$request->city;
        $user->save();
        return back();
    }
}
