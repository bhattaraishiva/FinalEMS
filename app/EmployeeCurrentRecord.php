<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DateTime;
use DB;

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
    //     $address = DB::table('employee_current_records')
    //     ->select('pardeshes.pradesh_name')
    //     ->join('address_infos', 'employee_current_records.employee_id', '=', 'address_infos.employee_id')
    //     ->join('pardeshes','pardeshes.pradesh_id', '=', 'address_infos.current_pradesh')
    //     // ->where('follows.follower_id', '=', 3)
    //     ->get();

    //     // $address =  $this->hasOneThrough('App\Pardesh','App\AddressInfo','current_pradesh','pradeshes_id','id');
    //     // // dd($address);
    //     // // return $this->belongsTo('App\AddressInfo','employee_id','employee_id');
    //     return $address;
    // }

    public function palika($employee_id){
        $palika = DB::table('palikas')
        ->join('address_infos', 'address_infos.current_palika', '=', 'palikas.palika_id')
        ->join('employee_current_records', 'employee_current_records.employee_id', '=', 'address_infos.employee_id')
        ->where('employee_current_records.employee_id', '=', $employee_id)
        ->get();
        // dd($palika);    

        return $palika;
    }

    public function permanent_palika($employee_id){
        $ppalika = DB::table('palikas')
        ->join('address_infos', 'address_infos.permanent_palika', '=', 'palikas.palika_id')
        ->join('employee_current_records', 'employee_current_records.employee_id', '=', 'address_infos.employee_id')
        ->where('employee_current_records.employee_id', '=', $employee_id)
        ->get();
        // dd($palika);    

        return $ppalika;
    }

    public function district($employee_id){
        $district = DB::table('districts')
        ->join('address_infos', 'address_infos.current_district', '=', 'districts.district_id')
        ->join('employee_current_records', 'employee_current_records.employee_id', '=', 'address_infos.employee_id')
        ->where('employee_current_records.employee_id', '=', $employee_id)
        ->get();
        // dd($district);    

        return $district;
    }

    
    public function permanent_district($employee_id){
        $pdistrict = DB::table('districts')
        ->join('address_infos', 'address_infos.permanent_district', '=', 'districts.district_id')
        ->join('employee_current_records', 'employee_current_records.employee_id', '=', 'address_infos.employee_id')
        ->where('employee_current_records.employee_id', '=', $employee_id)
        ->get();
        return $pdistrict;
    }

    public function ward(){
        return $this->belongsTo('App\AddressInfo','employee_id','employee_id');
    }

       
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
