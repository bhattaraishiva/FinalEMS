<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaryalayaPad extends Model
{
    //
    protected $guarded =[];

    public function pads(){
      return $this->hasMany('App\Pad','id','pad_id');
    }
    public function karyalaya(){
      return $this->hasMany('App\Ministry','id','karyalaya_id');
    }

}
