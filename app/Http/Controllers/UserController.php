<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\User;

class UserController extends Controller
{

    public function showUserQuestions($id)
    {
        //  $id = Auth::user()->id;
        $users = User::find($id);
        $userQuestions = DB::table('users')
            ->join('questions', 'users.id', '=', 'questions.user_id')
            ->where('questions.id', '=', $id)
            ->select('questions.*')
            ->get();

        $cats = DB::table('questions')
            ->join('cats', 'questions.id', '=', 'cats.id')
            ->where('cats.id', '=', $id)
            ->select('cats.*')
            ->get();


        $comments = DB::table('questions')
            ->join('comments', 'questions.id', '=', 'comments.id')
            ->where('comments.id', '=', $id)
            ->select('comments.*')
            ->get();
        $commentsNumber = $comments->count();
//         dd($commentsNumber);

        return view("userProfile", compact('userQuestions', 'users', 'cats', 'commentsNumber'));
    }


    public function updateUser(Request $request)
    {

        $users = User::find(Auth::id());
        $users->name = $request->name;
        $users->email = $request->email;
        $users->city = $request->city;
        $users->phone = $request->phone;
        if ($request->file('img')) {
            $users->img = $request->file('img')->store('images/profile');
        }
        if ($request->file('img')) {
            $users->cover = $request->file('cover')->store('images/cover');
        }
        $users->save();
        return response()->json($users->save(), 200);
    }
}
