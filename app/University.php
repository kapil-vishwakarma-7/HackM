<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $primaryKey = 'university_code';

    public function pendingCollege(){
    	return $this->hasMany('App\College','university_id','university_code')->where('pending','=',1);
    }
    public function college(){
    	return $this->hasMany('App\College','university_id','university_code')->where('pending','=',0);
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    





}
