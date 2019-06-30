<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{    
    protected $fillable = ['national_id','mobile_no','email','image',
                            'first_name','middle_name','last_name','eng_first_name',
                            'eng_middle_name','eng_last_name','address','gender',
                            'dob','father_name','mother_name','grandfather_name',
                            'grandmother_name','spouse_name','employee_number',
                            'permanent_pradesh','permanent_district','permanent_palika','permanent_wardno','permanent_tole',
                            'ministry_id','current_pradesh','current_district','current_palika','current_wardno','current_tole',
                            'nir_id','kar_id','sewa_id','samuha_id','upasamuha_id','taha_id',
                            'shreni_id','pad_id','hire_date','adjustment_placement_date','attendance_date',
                            'before_adjustment_placement_date',
                            'emp_type','emp_status'];

    public function pad(){
        return $this->belongsTo('App\Pad','pad_id');
    }

    public function nirdeshanalaya(){
        return  $this->belongsTo('App\Nirdeshanalaya','nir_id');        
    }  

    public function ministry(){
        return $this->belongsTo('App\Ministry','ministry_id');
    }

    public function taha(){
        return $this->belongsTo('App\Taha','taha_id');
    }

    public function karyalaya(){
        return $this->belongsTo('App\Karyalaya','kar_id');        
    }

    public function shreni(){
        return $this->belongsTo('App\Shreni','shreni_id');        
    }
    public function employeerecords(){
        return $this->hasMany('App\EmployeeRecord','employee_id');
    }

    public function sewas(){
        return $this->belongsTo('App\Sewa','sewa_id');        
    }
    public function samuha(){
        return $this->belongsTo('App\Samuha','samuha_id');        
    }

    public function upasamuha(){
        return $this->belongsTo('App\Upasamuha','upasamuha_id');        
    }

}
