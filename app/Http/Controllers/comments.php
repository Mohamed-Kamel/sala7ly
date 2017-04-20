<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Facade;
use StreamLab\StreamLabProvider\Facades\StreamLabFacades;


use App\Comment;
use  Auth;
use Mail;
use  \App\Rating;
use App\User;
use App\Question;
use carbon\Carbon;

class comments extends Controller
{

  
   public function post(Request $request, $id){

   	//comment`, `parent_id`, `question_id`, `created`, `user_id
    // dd($request);
    // $common= new Common;
    // Common::globalXssClean($request);
    Common::globalXssClean($request);
   $comment = new Comment;
   $comment->comment = $request->comment;
   $comment->parent_id= $request->parent_id;
   $comment->question_id= $request->question_id;
   $comment->user_id= Auth::id();
   $comment->save();

   	return response()->json(['success' => true],200);

   }

   public function mailfunction(Request $request, $id){

    // <!-- user_id`, `company_id`, `stars`, `review`, `status` -->
    // exit;
    // $rate = new Rating;
    // $rate->user_id=Auth::id();
    // $rate->company_id=$request->company_id;
    // $rate->stars="0";
    // $rate->review=" ";
    // $rate->status="0";


    //   $data=$request->all();


    //   if ($rate->save()) {

    //     Mail::send('mail', $data, function ($message)  {

    //             $message->from('awadelbana@gmail.com', 'salahly.com  ');

    //             $message->sender('awadelbana@hotmail.com', 'salahly.com ' );

    //             $message->to('muhamed.kamel.elsayed@gmail.com', "awad");

    //             $message->subject('عرض جديد ');

    //             $message->priority(3);
    //         });
          $question = Question::find($request->question_id);
          $user = User::find($request->company_id);
          $note=\Notification::send($user, new \App\Notifications\contact($question));
          $values=[
            'data' => 'عرض جديد لشركتك على  : <b>'.  $question->title . '</b>' .' من المستخدم: <b>'. auth()->user()->name . '</b>',
            'question_id' => $question->id,
            'created_at' =>  Carbon::now()->diffForHumans(),
            'no_unread' =>$user->unreadNotifications->count(),
            'company_id'=>$request->company_id,
            ];
            StreamLabFacades::pushMessage('sal7ly', 'contact', $values);
      // }


   }

   }
