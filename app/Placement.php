<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    public function college(){
    	return $this->belongsTo('App\College','college_id','college_code');
    }
    public function student(){
    	return $this->belongsTo('App\Student','student_id','enrollment_no');
    }
    public function company(){
    	return $this->belongsTo('App\Company','student_id','cin');
    }
}
