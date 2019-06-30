<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samuha extends Model
{
    protected $fillable = ['samuha_name','status'];

    public function employee(){
       return $this->hasMany('App\Samuha');
    }

    public function sewa(){
    	return $this->belongsTO('App\Sewa','sewa_id');
    }
}
