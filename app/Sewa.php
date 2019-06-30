<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    //
    protected $guarded = [];

    public function employee(){
       return $this->hasMany('App\Employee','sewa_id');
    }

    public function samuha(){
        return $this->hasMany('App\Samuha','sewa_id');
    }

    public function upasamuha(){
        return $this->hasMany('App\Upasamuha','sewa_id');
    }
    public function currentemployee(){
        return $this->belongsTo('App\EmployeeCurrentRecord','sewa_id');
    }

}
