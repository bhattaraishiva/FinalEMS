<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeePersonalDetail;
use App\Ministry;
use App\Nirdeshanalaya;
use App\Karyalaya;
use App\Taha;
use App\Pad;
use App\Employee;
use App\EmployeeRecord;
use App\Shreni;
use App\Sewa;
use App\Samuha;
use App\Upasamuha;
use App\Pardesh;
use App\District;
use App\EmployeeFamilyInfo;
use App\AddressInfo;
use App\FirstJobInfo;
use App\EmployeeCurrentRecord;
use App\EmployeeAllRecord;
use App\EducationInfo;
use Auth;

use Session;
use DB;
use Illuminate\Database\Eloquent\Collection;

class EmployeePersonalDetailController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $system_user_id = Auth::user()->id;
        $employees_registerd_by_user = EmployeeCurrentRecord::where('system_user_id',$system_user_id)->get();
        $employees_registerd_by_user_count = $employees_registerd_by_user->count();

        $emp_personal_rec = EmployeeCurrentRecord::all();
        $system_user_name = Auth::user()->name;

        // dd($emp_personal_rec);
        return view('admin.employee_personal_detail.index')->with(compact('emp_personal_rec','employees_registerd_by_user_count','system_user_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();
        $pradeshes= Pardesh::all();
        $pads= Pad::where('status',0)->get();
        $tahas= Taha::where('status',1)->get();
        $ministries=Ministry::where('status',1)->get();
        $nirdeshanalayas=Nirdeshanalaya::where('status',1)->get();
        $karyalayas=Karyalaya::where('status',1)->get();
        $shrenis=Shreni::where('status',1)->get();
        $sewas=Sewa::where('status',1)->get();
        $samuhas=Samuha::where('status',1)->get();
        $upasamuhas=Upasamuha::where('status',1)->get();

        return view('admin.employee_personal_detail.create')
                    ->with(compact('districts','ministries','nirdeshanalayas','karyalayas','tahas',
                    'shrenis','pads','sewas','samuhas','upasamuhas','pradeshes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
        $this->validate($request,[
            // these arefor personal detail
            'employee_number'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'efname'=>'required|string',
            'elname'=>'required|string',
            'national_id'=>'required',
            'national_id_issue_date'=>'required',
            'national_id_issue_district'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

            // these arefor family detail
            'father_name'=>'required',
            'mother_name'=>'required',
            'grandfather_name'=>'required',
            'marital_status'=>'required',

            // these arefor address detail
            'ppradesh_id'=>'required',
            'pdistrict_id'=>'required',
            'ppalika_id'=>'required',
            'permanent_wardno'=>'required',


            'cpradesh_id'=>'required',
            'cdistrict_id'=>'required',
            'cpalika_id'=>'required',
            'current_wardno'=>'required',

        ]);
        DB::transaction(function() use ($request){

            $system_user_id = Auth::user()->id;
             // checkif the form has file as image
             $filename='';
            if($request->hasfile('image'))
            {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/employee_photo/', $filename);
            }
            // store employee personal detail
            $emp = EmployeePersonalDetail::create([
                'system_user_id'=>$system_user_id,
                'employee_number'=>$request['employee_number'],
                'national_id'=>$request['national_id'],
                'mobile_no'=>$request['mobile_no'],
                'email'=>$request['email'],
                'first_name'=>$request['fname'],
                'middle_name'=>$request['mname'],
                'last_name'=>$request['lname'],
                'eng_first_name'=>$request['efname'],
                'eng_middle_name'=>$request['emname'],
                'eng_last_name'=>$request['elname'],
                'gender'=>$request['gender'],
                'dob'=>$request['dob'],
                'image'=>'uploads/employee_photo/'. $filename,
                'caste'=>$request['caste'],
                'community'=>$request['community'],
                'national_id_issue_district_id'=>$request['national_id_issue_district'],
                'national_id_issue_date'=>$request['national_id_issue_date'],

            ]);
            // this is the employee_id that gets stored in each table
                $inserted_emp_id = $emp['id'];
                // store family info
            EmployeeFamilyInfo::create([
                'system_user_id'=>$system_user_id,
                'employee_id'=> $inserted_emp_id,
                'father_name'=>$request['father_name'],
                'mother_name'=>$request['mother_name'],
                'grandfather_name'=>$request['grandfather_name'],
                'grandmother_name'=>$request['grandmother_name'],
                'marital_status'=>$request['marital_status'],
                'spouse_name'=>$request['spouse_name'],
                'spouse_province_employee'=>$request['spouse_province_employee'],
                'spouse_office_name'=>$request['spouse_office_name'],
                'spouse_employee_number'=>$request['spouse_employee_number'],
                'spouse_pradesh_employee_number'=>$request['spouse_pradesh_employee_number']
            ]);
            // store address
            AddressInfo::create([
                'system_user_id'=>$system_user_id,
                'employee_id'=> $inserted_emp_id,
                'permanent_pradesh'=>$request['ppradesh_id'],
                'permanent_district'=>$request['pdistrict_id'],
                'permanent_palika'=>$request['ppalika_id'],
                'permanent_wardno'=>$request['permanent_wardno'],
                'permanent_tole'=>$request['permanent_tole'],

                'current_pradesh'=>$request['cpradesh_id'],
                'current_district'=>$request['cdistrict_id'],
                'current_palika'=>$request['cpalika_id'],
                'current_wardno'=>$request['current_wardno'],
                'current_tole'=>$request['current_tole']
            ]);

            $employee_type=$request['employee_type'];
            $chief_ministry_attendance_date= null;
            $kaamkaj_chief_ministry_implement_date= null;
            $attendance_date = null;
            $samayojan_worked_at_pradesh = null;
            $karar_start_date = null;
            $karar_end_date = null;
            $naya_sifaris_date = null;
            $appointed_date=null;
            $ministry_attendance_date= null;
            $padasthapan_appointed_date_from_ministry= null;
            $before_pradesh_pad_appointed_date=null;
            $samayojan_if_working_in_same_pradesh_kaamkaj_appointed_date=null;
            // $karyalaya_attendance_date= null;

            if($employee_type == "kaam_kaaj"){

                $first_pad = $request['kaamkaj_first_pad'];
                $first_sewa_id = $request['kaamkaj_first_sewa'];
                $first_samuha_id = $request['kaamkaj_first_samuha'];
                $first_upasamuha_id = $request['kaamkaj_first_upasamuha'];
                $first_shreni_id = $request['kaamkaj_first_shreni'];
                $first_taha_id = $request['kaamkaj_first_taha'];
                $first_karyalaya_name = $request['kaamkaj_first_karyalaya_name'];
                $first_appointed_date = $request['kaamkaj_first_appointed_date'];
                $first_attendance_date = $request['kaamkaj_first_attendance_date'];

                $before_pradesh_pad = $request['kaamkaj_before_pradesh_pad'];
                $before_pradesh_sewa_id = $request['kaamkaj_before_pradesh_sewa'];
                $before_pradesh_samuha_id = $request['kaamkaj_before_pradesh_samuha'];
                $before_pradesh_upasamuha_id = $request['kaamkaj_before_pradesh_upasamuha'];
                $before_pradesh_shreni_id = $request['kaamkaj_before_pradesh_shreni'];
                $before_pradesh_taha_id = $request['kaamkaj_before_pradesh_taha'];
                $before_pradesh_karyalaya_name = $request['kaamkaj_before_pradesh_karyalaya'];
                $before_pradesh_pad_appointed_date = $request['kaamkaj_before_pradesh_pad_appointed_date'];
                $before_pradesh_attendance_date = $request['kaamkaj_before_pradesh_attendance_date'] ;
                // this isfor current status
                $appointed_date = $request['kaamkaj_appointed_date'];
                $chief_ministry_attendance_date = $request['kaamkaj_chief_ministry_attendance_date'];
                $sewa = $request['kaamkaj_sewa'];
                $samuha = $request['kaamkaj_samuha'];
                $upasamuha = $request['kaamkaj_upasamuha'];
                $shreni = $request['kaamkaj_shreni'];
                $taha = $request['kaamkaj_taha'];
                $ministry = $request['kaamkaj_ministry_id'] ;
                $nirdeshanalaya = $request['kaamkaj_nirdeshanalaya'];
                $karyalaya = $request['kaamkaj_karyalaya'];
                $pad = $request['kaamkaj_pad'];
                $kaamkaj_chief_ministry_implement_date = $request['kaamkaj_chief_ministry_implement_date'];
                $attendance_date = $request['kaamkaj_attendance_date'] ;

            }
            else if($employee_type == "samayojan"){
                $first_pad = $request['samayojan_first_pad'];
                $first_sewa_id = $request['samayojan_first_sewa'];
                $first_samuha_id = $request['samayojan_first_samuha'];
                $first_upasamuha_id = $request['samayojan_first_upasamuha'];
                $first_shreni_id = $request['samayojan_first_shreni'];
                $first_taha_id = $request['samayojan_first_taha'];
                $first_karyalaya_name = $request['samayojan_first_karyalaya_name'];
                $first_appointed_date = $request['samayojan_first_appointed_date'];
                $first_attendance_date = $request['samayojan_first_attendance_date'];

                $before_pradesh_pad = $request['samayojan_before_pradesh_pad'];
                $before_pradesh_sewa_id = $request['samayojan_before_pradesh_sewa'];
                $before_pradesh_samuha_id = $request['samayojan_before_pradesh_samuha'];
                $before_pradesh_upasamuha_id = $request['samayojan_before_pradesh_upasamuha'];
                $before_pradesh_shreni_id = $request['samayojan_before_pradesh_shreni'];
                $before_pradesh_taha_id = $request['samayojan_before_pradesh_taha'];
                $before_pradesh_karyalaya_name = $request['samayojan_before_pradesh_karyalaya'];
                $before_pradesh_pad_appointed_date = $request['samayojan_before_pradesh_pad_appointed_date'];
                $before_pradesh_attendance_date = $request['samayojan_before_pradesh_attendance_date'];

                // this is for current status
                $appointed_date = $request['samayojan_appointed_date'];
                $chief_ministry_attendance_date = $request['samayojan_chief_ministry_attendance_date'];
                $samayojan_worked_at_pradesh = $request['samayojan_worked_at_pradesh'];
                $samayojan_if_working_in_same_pradesh_kaamkaj_appointed_date=$request['samayojan_if_working_in_same_pradesh_kaamkaj_appointed_date'];
                $sewa = $request['samayojan_sewa'];
                $samuha = $request['samayojan_samuha'];
                $upasamuha = $request['samayojan_upasamuha'];
                $shreni = $request['samayojan_shreni'];
                $taha = $request['samayojan_taha'];
                // $ministry = $request['samayojan_ministry_id'] ;
                // $nirdeshanalaya = $request['samayojan_nirdeshanalaya'];
                // $karyalaya = $request['samayojan_karyalaya'];
                $pad = $request['samayojan_pad'];
                //for padasthapan in samayojan form
                $ministry_attendance_date = $request['oper_padasthapan_attendance_date_to_ministry'];
                $padasthapan_appointed_date_from_ministry = $request['oper_padasthapan_appointed_date_from_ministry'];
                // $sewa = $request['oper_padasthapan_sewa'];
                // $samuha = $request['oper_padasthapan_sewa'];
                // $upasamuha = $request['oper_padasthapan_upasamuha'];
                // $taha = $request['oper_padasthapan_taha'];
                // $shreni = $request['oper_padasthapan_shreni'];
                $ministry = $request['oper_padasthapan_ministry'];
                $nirdeshanalaya = $request['oper_padasthapan_nirdeshanalaya'];
                $karyalaya = $request['oper_padasthapan_karyalaya'];
                $pad = $request['oper_padasthapan_pad'];
                $attendance_date = $request['oper_padasthapan_attendance_date'];
          }
          else if($employee_type == "karar"){
             // this isfor current status
             $appointed_date = $request['karar_appointed_date'];
             $karar_start_date = $request['karar_start_date'];
             $karar_end_date = $request['karar_end_date'];
             $sewa = $request['karar_sewa'];
             $samuha = $request['karar_samuha'];
             $upasamuha = $request['karar_upasamuha'];
             $shreni = $request['karar_shreni'];
             $taha = $request['karar_taha'];
             $ministry = $request['karar_ministry_id'] ;
             $nirdeshanalaya = $request['karar_nirdeshanalaya'];
             $karyalaya = $request['karar_karyalaya'];
             $pad = $request['karar_pad'];
             $attendance_date = $request['karar_attendance_date'] ;

          }
          else if($employee_type == "naya"){
            // this isfor current status
            $appointed_date = $request['naya_appointed_date'];
            $naya_sifaris_date = $request['naya_sifaris_date'];
            $sewa = $request['naya_sewa'];
            $samuha = $request['naya_samuha'];
            $upasamuha = $request['naya_upasamuha'];
            $shreni = $request['naya_shreni'];
            $taha = $request['naya_taha'];
            $ministry = $request['naya_ministry_id'] ;
            $nirdeshanalaya = $request['naya_nirdeshanalaya'];
            $karyalaya = $request['naya_karyalaya'];
            $pad = $request['naya_pad'];
            $attendance_date = $request['naya_attendance_date'] ;

         }

            // $tore Firstjob info
            if($employee_type == "kaam_kaaj" || $employee_type == "samayojan"){

                FirstJobInfo::create([
                    'system_user_id'=>$system_user_id,
                    'employee_id'=> $inserted_emp_id,
                    'employee_type'=>$employee_type,
                    'first_pad'=>$first_pad,
                    'first_sewa_id'=>$first_sewa_id,
                    'first_samuha_id'=>$first_samuha_id,
                    'first_upasamuha_id'=>$first_upasamuha_id,
                    'first_shreni_id'=>$first_shreni_id,
                    'first_taha_id'=>$first_taha_id,
                    'first_karyalaya_name'=>$first_karyalaya_name,
                    'first_appointed_date'=>$first_appointed_date,
                    'first_attendance_date'=>$first_attendance_date,

                    'before_pradesh_pad'=>$before_pradesh_pad,
                    'before_pradesh_sewa_id'=>$before_pradesh_sewa_id,
                    'before_pradesh_samuha_id'=>$before_pradesh_samuha_id,
                    'before_pradesh_upasamuha_id'=>$before_pradesh_upasamuha_id,
                    'before_pradesh_shreni_id'=>$before_pradesh_shreni_id,
                    'before_pradesh_taha_id'=>$before_pradesh_taha_id,
                    'before_pradesh_karyalaya_name'=>$before_pradesh_karyalaya_name,
                    'before_pradesh_pad_appointed_date'=>$before_pradesh_pad_appointed_date,
                    'before_pradesh_attendance_date'=>$before_pradesh_attendance_date,

                ]);
            }

        //    store employee current record
            EmployeeCurrentRecord::create([
                'system_user_id'=>$system_user_id,
                'employee_id'=> $inserted_emp_id,
                'employee_number'=> $request['employee_number'],
                'employee_type'=>$employee_type,

                'appointed_date'=>$appointed_date,
                'chief_ministry_attendance_date'=>$chief_ministry_attendance_date,
                'kaamkaj_chief_ministry_implement_date'=>$kaamkaj_chief_ministry_implement_date,
                'attendance_date'=>$attendance_date,
                'samayojan_worked_at_pradesh'=>$samayojan_worked_at_pradesh,
                'samayojan_if_working_in_same_pradesh_kaamkaj_appointed_date'=>$samayojan_if_working_in_same_pradesh_kaamkaj_appointed_date,
                'karar_start_date'=>$karar_start_date,
                'karar_end_date'=>$karar_end_date,
                'naya_sifaris_date'=>$naya_sifaris_date,

                'sewa_id'=>$sewa,
                'samuha_id'=>$samuha,
                'upasamuha_id'=>$upasamuha,
                'shreni_id'=>$shreni,
                'taha_id'=>$taha,
                'ministry_id'=>$ministry,
                'nirdeshanalaya_id'=>$nirdeshanalaya,
                'karyalaya_id'=>$karyalaya,
                'pad_id'=>$pad,
            ]);

          //    store employee all current record
          EmployeeAllRecord::create([
            'system_user_id'=>$system_user_id,
            'employee_id'=> $inserted_emp_id,
            'employee_number'=> $request['employee_number'],
            'employee_type'=>$employee_type,
            'employee_activity'=>$employee_type,
            'operation_date'=>$appointed_date,

            'sewa_id'=>$sewa,
            'samuha_id'=>$samuha,
            'upasamuha_id'=>$upasamuha,
            'taha_id'=>$taha,
            'shreni_id'=>$shreni,
            'ministry_id'=>$ministry,
            'nirdeshanalaya_id'=>$nirdeshanalaya,
            'karyalaya_id'=>$karyalaya,
            'pad_id'=>$pad,

            'ministry_attendance_date'=>null,
            'padasthapan_appointed_date_from_ministry'=>null,
            'karyalaya_attendance_date'=>$attendance_date
        ]);
        //store employee educational info

                foreach ($request->serial_no as $key => $value) {
                $data =array(   
                                'system_user_id'=>$system_user_id,
                                'employee_id'=>$inserted_emp_id,
                                'employee_number'=>$request['employee_number'],
                                'serial_no'=>$value,
                                'edu_level'=>$request->edu_level[$key],
                                'major_sub'=>$request->major_sub[$key],
                                'stream'=>$request->stream[$key],
                                'country'=>$request->country[$key],
                                'edu_institute'=>$request->edu_institute[$key],
                                'board'=>$request->board[$key],
                                'passed_year'=>$request->passed_year[$key],
                                'division'=>$request->division[$key]);
                EducationInfo::insert($data);
            }
        });
        Session::flash('success','Employess Personal Detail Successfully stored !');
        return redirect()->route('employeepersonaldetail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $employee = EmployeePersonalDetail::find($id);
        $districts = District::all();
        $employee_current_jobinfo = EmployeeCurrentRecord::where('employee_id',$id)->get();
        // dd($employee_current_jobinfo);
        $sewas = Sewa::all();
        $samuhas = samuha::all();
        $upasamuhas = upasamuha::all();
        $tahas= taha::all();
        $shrenis= Shreni::all();
        $tahas = Taha::all();
        $ministries= Ministry::all();
        $nirdeshanalayas = Nirdeshanalaya::all();

        return view('admin.employee_personal_detail.edit')->with(compact('employee','districts','employee_current_jobinfo','sewas',
                                                                    'samuhas','upasamuhas','tahas','shrenis','tahas','ministries','nirdeshanalayas'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request,[
            'employee_number'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'elname'=>'required',
            'national_id'=>'required',
            'national_id_issue_date'=>'required',
            'national_id_issue_district'=>'required',


        ]);
        DB::transaction(function () use ($request,$id) {
        $new_image = $request->old_image;
        // print_r($new_image);

        if($request->hasfile('image'))
        {
          $file = $request->file('image');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $new_filename='uploads/employee_photo/'. $filename;
          $file->move('uploads/employee_photo/', $filename);
        }else{
            $new_filename=$new_image;
        }
        // print_r($filename);
        // dd($new_filename);
        $system_user_id=Auth::user()->id;
        EmployeePersonalDetail::where('id', $id)
                    ->update([
                    'system_user_id'=>$system_user_id,
                    'employee_number'=>$request->employee_number,
                    'national_id'=>$request->national_id,
                    'national_id_issue_date'=>$request->national_id_issue_date,
                    'national_id_issue_district_id'=>$request->national_id_issue_district,
                    'mobile_no'=>$request->mobile_no,
                    'email'=>$request->email,
                    'first_name' =>  $request->fname,
                    'middle_name' =>  $request->mname,
                    'last_name' =>  $request->lname,
                    'eng_first_name' =>  $request->efname,
                    'eng_middle_name' =>  $request->emname,
                    'eng_last_name' =>  $request->elname,
                    'gender' =>  $request->gender,
                    'dob' =>  $request->dob,
                    'image'=>$new_filename
                    ]);
                    $karar_start_date= null;
                    $karar_end_date= null;
                    $naya_sifaris_date= null;
                    if($request->edit_employee_type == "karar"){
                        $karar_start_date= $request->edit_karar_start_date;
                        $karar_end_date= $request->edit_karar_end_date;
                    }elseif($request->edit_employee_type == "naya"){
                        $naya_sifaris_date=$request->edit_naya_sifaris_date;
                    }

                    EmployeeCurrentRecord::where('employee_id', $id)
                    ->update([
                    'system_user_id'=>$system_user_id,
                    'employee_type'=>$request->edit_employee_type,
                    'appointed_date'=>$request->edit_appointed_date,
                    'attendance_date'=>$request->edit_attendance_date,
                    'karar_start_date'=>$karar_start_date,
                    'karar_end_date'=>$karar_end_date,
                    'naya_sifaris_date'=>$naya_sifaris_date,
                    'sewa_id' =>  $request->edit_sewa,
                    'samuha_id' =>  $request->edit_samuha,
                    'upasamuha_id' =>  $request->edit_upasamuha,
                    'shreni_id' =>  $request->edit_shreni,
                    'taha_id' =>  $request->edit_taha,
                    'ministry_id' =>  $request->edit_ministry,
                    'nirdeshanalaya_id' =>  $request->edit_nirdeshanalaya,
                    'karyalaya_id' =>  $request->edit_karyalaya,
                    'pad_id'=>$request->edit_pad
                    ]);

                    // EmployeeAllRecord::where('employee_id',$id){
                    //     ->update()
                    // }
                });
                Session::flash('success','कर्मचारी बिबरण सम्पादन भयो ।');
                return redirect()->route('employeepersonaldetail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
