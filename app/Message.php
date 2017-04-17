<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{


	use SoftDeletes;
 
 	public $timestamps = false;

    public function sender(){
        return $this->belongsTo('App\User', 'sender_id', 'id');
    }


    public function receiver(){
        return $this->belongsTo('App\User', 'receiver_id', 'id');
    }
}
