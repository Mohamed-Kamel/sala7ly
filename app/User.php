<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'city', 'phone', 'group_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public $timestamps = false;


    public function questions(){
        return $this->hasMany('App\Question');
    }

    public function company(){
        return $this->hasOne('App\Company_detail', 'company_id');
    }

    public function senderMessages(){
        return $this->hasMany('App\Message', 'sender_id');
    }

    public function receiverMessages(){
        return $this->hasMany('App\Message', 'receiver_id');
    }

    public function group(){
        return $this->belongsTo('App\Group');
    }

    public function rates(){
        return $this->hasMany('App\Rating');
    }
}
