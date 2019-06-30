<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use Session;
use DB;
use Illuminate\Database\Eloquent\Collection;

class EmployeeController extends Controller
{    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {   $employees= Employee::where('emp_status',1)->get();
        // dd($employees);  
        return view('admin.employee.index')->with('employees',$employees);
    }
    
    public function create()
    {        
        $ministries=Ministry::where('status',1)->get();
       
        $pradeshes = Pardesh::all();
        $nirdeshanalayas=Nirdeshanalaya::where('status',1)->get();
        $karyalayas=Karyalaya::where('status',1)->get();
        $pads=Pad::where('status',0)->get();
        $tahas=Taha::where('status',1)->get();
        $shrenis=Shreni::where('status',1)->get();
        $sewas=Sewa::where('status',1)->get();
        $samuhas=Samuha::where('status',1)->get();
        $upasamuhas=Upasamuha::where('status',1)->get();

        return view('admin.employee.create')->with(compact('ministries','nirdeshanalayas','karyalayas','tahas',
                                        'shrenis','pads','sewas','samuhas','upasamuhas','pradeshes'
                                        ));                                    
    }

    
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request);
        $this->validate($request,[
            'ministry_id'=>'required',
            'pad'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'fathername'=>'required',
            'gfname'=>'required',
            'hdate'=>'required',
            'fathername'=>'required',
            'attendancedate'=>'required',
            'emp_type'=>'required',                
        ]);

        DB::transaction(function() use ($request){

            $pad = $request->pad;
            // dd($pad);
            $emp = Employee::create([
                'employee_number'=>$request['employeenumber'],
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
                'father_name'=>$request['fathername'],
                'mother_name'=>$request['mothername'],
                'grandfather_name'=>$request['gfname'],
                'grandmother_name'=>$request['gmname'],
                'spouse_name'=>$request['hwname'],
                'image'=>$request['image'],
                'permanent_pradesh'=>$request['pradesh_id'],
                'permanent_district'=>$request['district_id'],
                'permanent_palika'=>$request['palika_id'],
                'permanent_wardno'=>$request['permanent_wardno'],
                'permanent_tole'=>$request['permanent_tole'],

                'current_pradesh'=>$request['cpradesh_id'],
                'current_district'=>$request['cdistrict_id'],
                'current_palika'=>$request['cpalika_id'],
                'current_wardno'=>$request['current_wardno'],
                'current_tole'=>$request['current_tole'],

                'ministry_id'=>$request['ministry_id'],
                'nir_id'=>$request['nirdeshanalaya'],
                'kar_id'=>$request['karyalaya'],
                'sewa_id'=>$request['sewa'],
                'samuha_id'=>$request['samuha'],
                'upasamuha_id'=>$request['upasamuha'],
                'taha_id'=>$request['taha'],
                'shreni_id'=>$request['shreni'],
                'pad_id'=>$request['pad'],
                'hire_date'=>$request['hdate'],
                'adjustment_placement_date'=>$request['adjustment_placement_date'],
                'attendance_date'=>$request['attendancedate'],
                'before_adjustment_placement_date'=>$request['before_adjustment_placement_date'],
                'emp_type'=>$request['emp_type']
                
            ]);
                // dd($emp['id']);
                $emp_id = $emp['id'];
            EmployeeRecord::create([
                'employee_activity'=>"new",
                'employee_id'=>$emp_id,
                'employee_number'=>$request['employeenumber'],
                'ministry_id'=>$request['ministry_id'],
                'nirdeshanalaya_id'=>$request['nirdeshanalaya'],
                'karyalaya_id'=>$request['karyalaya'],
                'taha_id'=>$request['taha'],
                'shreni_id'=>$request['shreni'],
                'pad_id'=>$request['pad'],
                'employee_type'=>$request['emp_type'],
                'appointed_date'=>$request['hdate'],
                'adjustment_placement_date'=>$request['adjustment_placement_date'],
                'attendance_date'=>$request['attendancedate'],
                'before_adjustment_placement_date'=>$request['before_adjustment_placement_date'],
                'upgrade_date'=>"null",
                'depart_date'=>"null",
              
            ]);
            
             // $count_pad=DB::table('employees')
            // ->select(DB::raw('count(*) as total'))
            // ->where('pad_id', $pad)
            // ->get();
            $count_pad = DB::table('employees')->where('pad_id', $pad)->count();
          
            // dd($count_pad);
            $pads_info=Pad::where('id',$pad)->get();
            $total_pad= $pads_info[0]->pad_quantity;
            if ($count_pad >= $total_pad) {
              
                Pad::where('id',$pad)
                ->update ([
                'status' =>'1',
                ]);
 
            }
        });
       

        Session::flash('success','Employess Record Successfully stored !');
        return redirect()->route('employee.index');
    }
    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {        
        $employee = Employee::find($id);
        // dd($employee);
        $shrenis = Shreni::where('status',1)->get();
        $pads= Pad::where('status',0)->get();
        $allpads = Pad::all();
        $tahas = Taha::where('status',1)->get();
        $karyalayas= Karyalaya::where('status',1)->get();
        $nirdeshanalayas =Nirdeshanalaya::where('status',1)->get();
        $ministries=Ministry::where('status',1)->get();
        $sewas=Sewa::where('status',1)->get();
        $samuhas=Samuha::where('status',1)->get();
        $upasamuhas=Upasamuha::where('status',1)->get();
        $pradeshes = Pardesh::all();


        return view('admin.employee.edit')->with(compact('allpads','nirdeshanalayas','ministries',
                                                            'karyalayas','tahas','pads','shrenis','employee',
                                                            'sewas','samuhas','upasamuhas','pradeshes'));
    }
    
    public function update(Request $request, $id)
     {   
        //  dd($request);
        DB::transaction(function() use ($request,$id){
            $oldpad = $request->oldpad;
            $emp_id =$request->employee_id;

            $pad = $request->pad;
            Employee::where('id', $id)
                    ->update([
                    'employee_number'=>$request->employeenumber,
                    'national_id'=>$request->national_id,
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
                    'father_name' =>  $request->fathername,
                    'mother_name' =>  $request->mothername,
                    'grandfather_name' =>  $request->gfname,
                    'grandmother_name' =>  $request->gmname,
                    'spouse_name' =>  $request->hwname,
                    'image'=>$request->image,

                    'permanent_pradesh'=>$request->pradesh_id,
                    'permanent_district'=>$request->district_id,
                    'permanent_palika'=>$request->palika_id,
                    'permanent_wardno'=>$request->permanent_wardno,
                    'permanent_tole'=>$request->permanent_tole,

                    'current_pradesh'=>$request->cpradesh_id,
                    'current_district'=>$request->cdistrict_id,
                    'current_palika'=>$request->cpalika_id,
                    'current_wardno'=>$request->current_wardno,
                    'current_tole'=>$request->current_tole,

                    'ministry_id' =>  $request->ministry_id,
                    'nir_id' =>  $request->nirdeshanalaya,
                    'kar_id' =>  $request->karyalaya,
                    'sewa_id' =>  $request->sewa,
                    'samuha_id' =>  $request->samuha,
                    'upasamuha_id' =>  $request->upasamuha,
                    'taha_id' =>  $request->taha,
                    'shreni_id' =>  $request->shreni,
                    'pad_id' =>  $request->pad,
                    'hire_date' =>  $request->hdate,
                    'attendance_date' =>  $request->attendancedate,
                    'adjustment_placement_date' =>  $request->adjustment_placement_date,
                    'before_adjustment_placement_date' => $request->before_adjustment_placement_date,
                    'emp_type' =>  $request->emp_type,
                    'emp_status' =>  $request->emp_status,
                    ]);
                   
            Pad::where('id',$oldpad)
                    ->update([
                    'status' =>'0',
                    ]);

            $count_pad = DB::table('pads')->where('id', $pad)->count();
            $pads_info=Pad::where('id',$pad)->get();
            $total_pad= $pads_info->pad_quantity;

            if ($count_pad >= $total_pad) {
              
                Pad::where('id',$pad)
                ->update ([
                'status' =>'1',
                ]);
 
            }
           
            EmployeeRecord::where([
                            ['employee_id','=', $emp_id],
                            ['employee_activity','=','new']
                            ])
                            ->update([
                                'pad_id'=>$pad,
                            ]);

                   
        });
            Session::flash('success','Employee info सम्पादन भयो ।');
            return redirect()->route('employee.index');
    }
        
    public function destroy($id)
    {
        
    }


   


}
