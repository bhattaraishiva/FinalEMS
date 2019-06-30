<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ministry;
use App\Nirdeshanalaya;
use App\Karyalaya;
use App\Taha;
use App\Pad;
use App\Employee;
use App\Shreni;
use App\EmployeeRecord;
use App\Sewa;
use App\Samuha;
use App\Upasamuha;
use Session;
use DB;


class EmployeerecordController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $employeerec = EmployeeRecord::all();
        // // dd($employeerec[0]);
        // return view('admin.report.index')->with('employees_records',$employeerec);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $oneemployee = DB::table('employees')
            ->join('pads', 'pads.id', '=', 'employees.pad_id')
            ->join('shrenis', 'shrenis.id', '=', 'employees.shreni_id')
            ->join('tahas', 'tahas.id', '=', 'employees.taha_id')
            ->join('karyalayas', 'karyalayas.id', '=', 'employees.kar_id')
            ->join('nirdeshanalayas', 'nirdeshanalayas.id', '=', 'employees.nir_id')
            ->join('ministries', 'ministries.id', '=', 'employees.ministry_id')
            ->select('tahas.*', 'karyalayas.*', 'nirdeshanalayas.*', 'ministries.*', 'employees.*', 'pads.*', 'shrenis.*')
            ->where('employees.id', '=', $id)
            ->get();

        // dd($oneemployee);

        $employee = Employee::find($id);
        // dd($employee);
        $shrenis = Shreni::where('status', 1)->get();
        $pads = Pad::where('status', 0)->get();
        $tahas = Taha::where('status', 1)->get();
        $karyalayas = Karyalaya::where('status', 1)->get();
        $nirdeshanalayas = Nirdeshanalaya::where('status', 1)->get();
        $ministries = Ministry::where('status', 1)->get();

        return view('admin.employee.operate')->with(compact('oneemployee', 'nirdeshanalayas', 'ministries', 'karyalayas', 'tahas', 'pads', 'shrenis', 'employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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


    //this method is to perform additional operation on employee ie update or leave operation
    public function operate($id)
    {

        $employee = Employee::find($id);
        $shrenis = Shreni::where('status', 1)->get();
        $allpads = Pad::all();
        // dd($allpads);
        $pads = Pad::where('status', 0)->get();
        $tahas = Taha::where('status', 1)->get();
        $karyalayas = Karyalaya::where('status', 1)->get();
        $nirdeshanalayas = Nirdeshanalaya::where('status', 1)->get();
        $ministries = Ministry::where('status', 1)->get();

        return view('admin.employee.operate')->with(compact('allpads', 'nirdeshanalayas', 'ministries', 'karyalayas', 'tahas', 'pads', 'shrenis', 'employee'));
    }


    // store the information of employee activity ie leave or upgrade info
    public function storeActivity(Request $request)
    {
        //   dd($request->all());

        DB::transaction(function () use ($request) {
            $oldpad = $request->oldpad;
            $emp = $request->employee_id;
            $pad = $request->pad;
            $status = '1';

            // dd($request->all());


            if ($request->employee_activity == 'upgrade') {
                $employee_activity = $request['employee_activity'];
                $upgrade_date = $request['upgradedate'];
                $depart_date = null;


                $count_pad = DB::table('employees')->where('pad_id', $pad)->count();

                // dd($count_pad);
                $pads_info = Pad::where('id', $pad)->get();
                $total_pad = $pads_info[0]->pad_quantity;

                if ($count_pad >= $total_pad) {

                    Pad::where('id', $pad)
                        ->update([
                            'status' => '1',
                        ]);
                }
            } else {
                $employee_activity = $request['employee_activity'];
                $upgrade_date = null;
                $depart_date = $request['leavedate'];
                $status = '0';
            }


            EmployeeRecord::create([

                'employee_activity' => $employee_activity,
                'employee_number' => $request['employeenumber'],
                'employee_id' => $request['employee_id'],
                'ministry_id' => $request['ministry_id'],
                'nirdeshanalaya_id' => $request['nirdeshanalaya'],
                'karyalaya_id' => $request['karyalaya'],
                'taha_id' => $request['taha'],
                'shreni_id' => $request['shreni'],
                'pad_id' => $request['pad'],
                'employee_type' => $request['emp_type'],
                'appointed_date' => $request['hdate'],
                'adjustment_placement_date' => $request['adjustment_placement_date'],
                'attendance_date' => $request['attendance_date'],
                'before_adjustment_placement_date' => $request['before_adjustment_placement_date'],
                'upgrade_date' => $upgrade_date,
                'depart_date' => $depart_date,

            ]);

            Employee::where('id', $emp)
                ->update([
                    'ministry_id' =>  $request['ministry_id'],
                    'nir_id' =>  $request['nirdeshanalaya'],
                    'kar_id' =>  $request['karyalaya'],
                    'taha_id' =>  $request['taha'],
                    'shreni_id' =>  $request['shreni'],
                    'pad_id' =>  $request['pad'],
                    'emp_type' =>  $request['emp_type'],
                    'emp_status' => $status
                ]);


            Pad::where('id', $oldpad)
                ->update([
                    'status' => '0',
                ]);
        });



        Session::flash('success', 'Employess Upgraded Record Successfully Stored');
        return redirect()->route('employee.index');
    }

    public function viewreport($id)
    {
        $employee = Employee::where('id', $id)->first();
        // dd($employee);
        $allemployee_records = EmployeeRecord::orderBy('id', 'DESC')
            ->where('employee_id', $id)
            ->get();
        //    dd($allemployee_records);
        $shrenis = Shreni::where('status', 1)->get();
        $allpads = Pad::all();

        $pads = Pad::where('status', 0)->get();
        $tahas = Taha::where('status', 1)->get();
        $karyalayas = Karyalaya::where('status', 1)->get();
        $nirdeshanalayas = Nirdeshanalaya::where('status', 1)->get();
        $ministries = Ministry::where('status', 1)->get();
        $sewas = Sewa::all();
        $samuhas = Samuha::all();
        $upasamuhas = Upasamuha::all();

        return view('admin.report.view_employee_report')->with(compact(
            'allpads',
            'nirdeshanalayas',
            'ministries',
            'karyalayas',
            'tahas',
            'pads',
            'shrenis',
            'employee',
            'allemployee_records',
            'sewas',
            'samuhas',
            'upasamuhas'
        ));
    }
}
