<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeRecord extends Model
{
    //
    protected $fillable = ['employee_activity','employee_number','employee_id',
                        'ministry_id','nirdeshanalaya_id','karyalaya_id','taha_id',
                        'shreni_id','pad_id','employee_type','appointed_date',
                        'adjustment_placement_date','attendance_date','before_adjustment_placement_date',
                        'upgrade_date','depart_date','emp_status'];

    public function employee(){
        return $this->belongsTo('App\Employee','employee_id');
    }

    public function pad(){
        return $this->belongsTo('App\Pad','pad_id');
    }
    public function nirdeshanalaya(){
        return  $this->belongsTo('App\Nirdeshanalaya','nirdeshanalaya_id');        
    }  

    public function ministry(){
        return $this->belongsTo('App\Ministry','ministry_id');
    }

    public function taha(){
        return $this->belongsTo('App\Taha','taha_id');
    }

    public function karyalaya(){
        return $this->belongsTo('App\Karyalaya','karyalaya_id');        
    }

    public function shreni(){
        return $this->belongsTo('App\Shreni','shreni_id');        
    }
     public function sewa(){
        return $this->belongsTo('App\Sewa','sewa_id');        
    }
    public function samuha(){
        return $this->belongsTo('App\Samuha','samuha_id');        
    }

    public function upasamuha(){
        return $this->belongsTo('App\Upasamuha','upasamuha_id');        
    }

}
