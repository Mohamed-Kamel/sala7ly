<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
	public $timestamps = false;

	public function question(){
	    return $this->belongsTo('App\Question', 'question_id', 'id');
    }
}
