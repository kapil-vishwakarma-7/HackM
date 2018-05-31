<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $primaryKey = 'code';

    public function college(){
    	return $this->hasMany('App\College');
    }
}
