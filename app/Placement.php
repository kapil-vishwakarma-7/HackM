<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    public function college(){
    	return $this->belongsTo('App\College','college_id','college_code');
    }
}
