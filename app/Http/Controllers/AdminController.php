<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;

class AdminController extends Controller
{
  public function users()
  {
    //  $users=User::all();
    $users = User::withTrashed()->get();
    return view('admin.users',compact('users'));
  }
  //soft delete users
  public function deleteUser($id) {
    $user = User::find($id);
    $user->delete();
    return Redirect::back();
  }
  // restore trashed users
  public function restorUser($id){
    $users = User::onlyTrashed()->find($id);
    $users->restore();
    return Redirect::back();
  }
}
