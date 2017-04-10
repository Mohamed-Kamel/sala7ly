<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_detail extends Model
{
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User', 'company_id', 'id');
    }
}
