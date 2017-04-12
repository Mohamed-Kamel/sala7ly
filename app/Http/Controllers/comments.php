<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use  Auth;
use Mail;
use  \App\Rating;
//use App\Common;

class comments extends Controller
{


   public function post(Request $request, $id){

   	//comment`, `parent_id`, `question_id`, `created`, `user_id
    // dd($request);
    // $common= new Common;
    // Common::globalXssClean($request);

   $comment = new comment;
   $comment->comment = $request->comment;
   $comment->parent_id= $request->parent_id;
   $comment->question_id= $request->question_id;
   $comment->user_id= Auth::id();
   $comment->save();
   
   	return response()->json(['success' => true],200);

   }

   public function   mailfunction(Request $request, $id){

 // dd($request->company_id);
    // <!-- user_id`, `company_id`, `stars`, `review`, `status` -->
    $rate = new  Rating;
    $rate->user_id=Auth::id();
    $rate->company_id=$request->company_id;
    $rate->stars="0";
    $rate->review=" ";
    $rate->status="0";
    
      $data=$request->all();


      if ($rate->save()) {

        Mail::send('mail', $data, function ($message)  {

                $message->from('awadelbana@gmail.com', 'salahly.com  ');

                $message->sender('awadelbana@hotmail.com', 'salahly.com ' );

                $message->to('muhamed.kamel.elsayed@gmail.com', "awad");

                $message->subject('عرض جديد ');

                $message->priority(3);
            });
        
      }

         
   }

   }
