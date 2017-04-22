<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function sender(){
        return $this->belongsTo('App\Chat', 'sender_id', 'id');
    }

    public function receiver(){
        return $this->belongsTo('App\Chat', 'receiver_id', 'id');
    }
}
