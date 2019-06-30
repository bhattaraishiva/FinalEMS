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

}
