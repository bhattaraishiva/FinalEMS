<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeAllRecord extends Model
{
    //
    protected $guarded = [];

    public function ministry(){
        return $this->belongsTo('App\Ministry','ministry_id');
    }

    public function karyalaya(){
        return $this->belongsTo('App\Karyalaya','karyalaya_id');
    }

    public function pad(){
        return $this->belongsTo('App\Pad','pad_id');
    }

}
