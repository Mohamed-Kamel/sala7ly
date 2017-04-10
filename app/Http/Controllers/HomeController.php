<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function company_details(){

        return view('company_details');
    }


    public function details(Request $Request){

       
        $this->validate($Request,[
                'address' => 'required|string|min:6|max:50',
                'desc' => 'required|string|min:20|max:255',
            ],[
                'address.required' => ' برجاء ادخال عنوان الشركه',
                'address.min' => ' عنوان الشركه 6 حروف على الاقل',
                'address.max' => ' عنوان الشركه 50 حرف على الاكثر.',
                'desc.required' => ' برجاء كتابه وصف للشركه',
                'desc.min' => ' وصف الشركه يجب ان يكون 20 حرف على الاقل',
                'desc.max' => ' يجب ان لا يكون الوصف اكبر من 255 حرف',
            ]);

        $comp = new \App\Company_detail;

        $comp ->address= $Request['address'];

        $comp ->desc = $Request['desc'];
        $comp ->company_id = Auth::id();

        $comp ->save();
       
        return   redirect('/company');

        
    }
}
