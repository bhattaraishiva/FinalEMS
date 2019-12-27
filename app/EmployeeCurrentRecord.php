<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DateTime;

class EmployeeCurrentRecord extends Model
{
    //
    protected $guarded = [];

    public function personal_detail(){
        return $this->hasOne('App\EmployeePersonalDetail','id','employee_id');
    }

    public function family_info(){
        return $this->belongsTo('App\EmployeeFamilyInfo','employee_id','employee_id');//the first employee_id is the foreign key and the next is the value to look at the table for matching
    }
    // public function address_info(){
    //     return $this->hasOneThrough('App\Pardesh','App\AddressInfo','current_pradesh','pradeshes_id','id');
    //     // return $this->belongsTo('App\AddressInfo','employee_id','employee_id');
    // }

    public function ministry(){
        return $this->belongsTo('App\Ministry','ministry_id');
    }

    public function nirdeshanalaya(){
        return  $this->belongsTo('App\Nirdeshanalaya','nirdeshanalaya_id');
    }

    public function karyalaya(){
        return $this->belongsTo('App\Karyalaya','karyalaya_id','id');
    }

    public function pad(){
        return $this->hasOne('App\Pad','id','pad_id');
    }

    public function taha(){
        return $this->belongsTo('App\Taha','taha_id');
    }
   public function shreni(){
        return $this->belongsTo('App\Shreni','shreni_id');
    }
     public function sewa(){
        return $this->hasOne('App\Sewa','id','sewa_id');
    }
    public function samuha(){
        return $this->belongsTo('App\Samuha','samuha_id');
    }

    public function upasamuha(){
        return $this->belongsTo('App\Upasamuha','upasamuha_id');
    }

    public function before_samayojan_or_kamkaj_appointed_date(){
        return $this->belongsTo('App\FirstJobInfo','employee_id','employee_id');
    }

        public function calculateWorkingDays(){
        $current_date = Carbon::parse(Carbon::now()->format('Y-m-d'));
        // $current_date = gettype($current_date);
        // dd(($current_date));
        $appointed_date = Carbon::parse($this->attendance_date_ad);
        return $appointed_date->diff($current_date)
        ->format('%y वर्ष, %m महिना, %d दिन');
    }
}
