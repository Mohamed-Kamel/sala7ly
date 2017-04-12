<?php

namespace App\Http\Controllers;
use App\Faq;

class FaqController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $faqs = Faq::all();
        return view('faq', compact('faqs'));
    } 

}
