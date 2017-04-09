<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

	public $timestamps = false;

	protected function cat()
    {
        return $this->belongsTo('App\Cat', 'cat_id', 'id');
    }

    protected function comments()
    {
        return $this->hasMany('App\Comment');
    }

    protected function user()
    {
        return $this->belongsTo('App\User');
    }
}
