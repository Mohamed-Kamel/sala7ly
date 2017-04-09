<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    
    public $timestamps = false;

    public function users(){
        return $this->belongsTo('App\User', 'company_id');
    }
}
