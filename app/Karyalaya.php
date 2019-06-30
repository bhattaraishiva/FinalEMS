<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyalaya extends Model
{    
    protected $fillable=['ministry_id','nirdeshanalaya_id','karyalaya_code','kar_name','karyalaya_address','employee_number','status'];

    public function nirdeshanalayas(){
      return  $this->belongsTo('App\Nirdeshanalaya','nirdeshanalaya_id');        
    }   
    
    public function ministry(){
        return $this->belongsTo('App\Ministry','ministry_id');
    }

    public function taha(){
        $this->hasMany('App\Taha');        
    }

    public function employee(){
        $this->hasMany('App\Employee');        
    }
}
