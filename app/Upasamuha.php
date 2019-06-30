<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upasamuha extends Model
{
    protected $fillable = ['upasamuha_name','status'];

    public function employee(){
       return $this->hasMany('App\Upasamuha');
    }

     public function sewa(){
    	return $this->belongsTO('App\Sewa','id');
    }

     public function samuha(){
    	return $this->belongsTO('App\Samuha','id');
    }
}
