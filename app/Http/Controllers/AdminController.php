<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Redirect;
use App\Company_detail;

class AdminController extends Controller
{


	// view all users for admin 
	  public function users()
	  {
	    
	    $users = User::withTrashed()->get();

	    return view('admin.users',compact('users'));
	  }
  // view all softdeleted companies 

	  public function trashedcompanies()
	  {
	    
	    $companies = User::onlyTrashed()->where('group_id','=','2')->get();

	    return view('admin.trashedcompanies',compact('companies'));
	  }


  // view all company for admin 

	  public function  viewallcompanies(){

	       $companies = User::where('group_id', '=', 2)->get();
	         
	        return view('admin.companies',compact('companies'));
	    }


  //soft delete users and companies

  public function deleteUser($id) {


    $user = User::find($id);
     
    $user->delete();

    return Redirect::back();
  }

  // restore trashed users  and companies

  public function restorUser($id){

    $users = User::onlyTrashed()->find($id);

    $users->restore();

    return Redirect::back();
  }

}
