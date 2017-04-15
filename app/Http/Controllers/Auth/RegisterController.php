<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;




class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'           => 'Required|string|min:5|max:50',  
            'email'          => 'Required|min:5|max:50|Email|Unique:users',
            'password'       => 'required|min:6|confirmed',
            'phone'          => 'required|regex:/[0-9+]+/|min:8|max:14|string|unique:users',
            'coverphoto'     => 'image|mimes:jpeg,jpg,png,gif|nullable',
            'profilephoto'   => 'image|required|mimes:jpeg,jpg,png,gif',
            'group'          => 'in:1,2'

        ],
        [
                'required'      => 'يجب ادخال هذا الحقل ',
                'name.min'      => ' الاسم يجب ان يكون اكبر من 5 حروف',
                'name.string'   => ' برجاء ادخال الاسم صحيح',
                
                'email.Email'   => ' يجب ادخال البريد الاليكترونى بطريقه صحيحه',
                
                'email.unique'  =>'عفوا هذا البريد الاليكترونى موجود مسبقا',
                
                'password.min'  =>'يجب ادخال كلمه مرور اكبر من 6 احرف',
                'password.confirmed'=>'عفوا يجب ادخال كلمه المرور بطريقه صحيحه',
                'phone.min'     =>'عفوا يجب ادخال رقم التليفون صحيح',
                'phone.numeric' =>'عفوا يجب ادخال رقم التليفون صحيح',
                'phone.unique'  =>'هذا الرقم محجوز مسبقا',
                'image'         =>'يجب ادخال صوره ',


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $coverPath = null;
       if (isset($data['coverphoto'])) {

        // $data['coverphoto']="null";
        $coverPath = $data['coverphoto']->store('images/cover');

       }
       

         return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'phone'=>$data['phone'],
                'city'=>$data['city'],
                'group_id'=>$data['group'],
                'img'   => $data['profilephoto']->store('images/profile'),
                'cover' => $coverPath


        ]);
      
       }

}

 

