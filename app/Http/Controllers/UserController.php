<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\User;
use Redirect;

class UserController extends Controller
{

    public function showUserQuestions($id)
    {
        $users = User::find($id);
//        dd($users->questions);
//        $userQuestions = DB::table('users')
//            ->join('questions', 'users.id', '=', 'questions.user_id')
//            ->where('questions.id', '=', $id)
//            ->select('questions.*')
//            ->get();
        
//        $cats = DB::table('questions')
//            ->join('cats', 'questions.id', '=', 'cats.id')
//            ->where('cats.id', '=', $id)
//            ->select('cats.*')
//            ->get();


//        $comments = DB::table('questions')
//            ->join('comments', 'questions.id', '=', 'comments.id')
//            ->where('comments.id', '=', $id)
//            ->select('comments.*')
//            ->get();
//        $commentsNumber = $comments->count();
       // dd($commentsNumber);

        return view("userProfile", compact( 'users'));
    }


    public function updateUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:7|max:17',
            'city' => 'required',
            'phone'=>'required|min:11|max:20',
            'img'=>'image',
            'cover'=>'image',
        ]);
        $users = User::find(Auth::id());
        $users->name = $request->name;
        // $users->email = $request->email;
        $users->city = $request->city;
        $users->phone = $request->phone;
        if ($request->file('img')) {
            $users->img = $request->file('img')->store('asset(images/profile)');
        }
        if ($request->file('cover')) {
            $users->cover = $request->file('cover')->store('images/cover');
        }
        $users->save();
        // return response()->json($users->save(), 200);
        return Redirect::back();
    }
}