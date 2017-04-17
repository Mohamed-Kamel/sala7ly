<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{

    use SoftDeletes;

	public $timestamps = false;

	public function question(){
	    return $this->belongsTo('App\Question', 'question_id', 'id');
    }

    public function reply(){

	    return Comment::where('parent_id', '=', $this->id)->get();
    }
    public function users(){
	    return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
