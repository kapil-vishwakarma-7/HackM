<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $primaryKey = 'college_code';


    public function university(){
    	return $this->belongsTo('App\University','university_id','university_code');
    }
}
