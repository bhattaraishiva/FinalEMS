<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ministry;
use App\Nirdeshanalaya;
use App\Karyalaya;
use App\Pad;
use App\Employee;
use App\EmployeeCurrentRecord;
use App\KaryalayaPad;
use Session;
use DB;


class KaryalayaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ministries = Ministry::where('status', 1)->get();
        $nirdeshanalayas = Nirdeshanalaya::where('status', 1)->get();
        $karyalayas = Karyalaya::all();
        // dd($karyalayas);
        $allpads = Pad::all();
        // $pad_info = DB::table('pads')->where('status', 1)
        //     ->select('kar_id', DB::raw('count(*) as total'))
        //     ->groupBy('kar_id')
        //     //
        //     ->get();
        //  dd($pad_info);

        return view('admin.karyalaya.index')->with(compact('karyalayas', 'ministries', 'nirdeshanalayas'));
    }

    public function create()
    {
        return view('admin.karyalaya.create')->with('ministries', Ministry::where('status', 1)->get())
            ->with('nirdeshanalayas', Nirdeshanalaya::where('status', 1)->get())
            ->with('pads', Pad::all());
    }

    public function store(Request $request)
    {
        // dd($request->all());
        DB::transaction(function () use ($request) {
            $this->validate($request, [
                'ministry_id' => 'required',
                'karyalaya' => 'required',
                'karyalaya_code' => 'required',
                'address' => 'required',
                'employee_number' => 'required'
            ]);

            $karyalaya = Karyalaya::create([
                'ministry_id' => $request['ministry_id'],
                'nirdeshanalaya_id' => $request['nirdeshanalaya'],
                'karyalaya_code' => $request['karyalaya_code'],
                'kar_name' => $request['karyalaya'],
                'karyalaya_address' => $request['address'],
                'employee_number' => $request['employee_number'],
                'status' => $request['status']
            ]);
            $kar_id = $karyalaya->id;

            foreach ($request->serial_no as $key => $value) {
                $data = array(
                    'ministry_id' => $request['ministry_id'],
                    'karyalaya_id' => $kar_id,
                    'serial_no' => $value,
                    'pad_id' => $request->pad[$key],
                    'pad_qty' => $request->pad_qty[$key]
                );
                KaryalayaPad::insert($data);
            }
        });
        Session::flash('success', 'Karyalaya Created Successfully!');

        return redirect()->route('karyalaya.index');
    }

    public function show($id)
    { }

    public function edit($id)
    {
        $karyalaya = Karyalaya::find($id);
        $nirdeshanalayas = Nirdeshanalaya::where('status', 1)->get();
        $ministries = Ministry::where('status', 1)->get();
        $pads = Pad::all();
        return view('admin.karyalaya.edit')->with(compact('ministries', 'nirdeshanalayas', 'karyalaya','pads'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'ministry_id' => 'required',
            'karyalaya' => 'required',
            'karyalaya_code' => 'required',
            'address' => 'required',
            'employee_number' => 'required'
        ]);

        $karyalaya = Karyalaya::find($id);
        $karyalaya->ministry_id = $request->ministry_id;
        $karyalaya->nirdeshanalaya_id = $request->nirdeshanalaya;
        $karyalaya->karyalaya_code = $request->karyalaya_code;
        $karyalaya->kar_name = $request->karyalaya;
        $karyalaya->karyalaya_address = $request->address;
        $karyalaya->employee_number = $request->employee_number;
        $karyalaya->status = $request->status;
        $karyalaya->save();

        Session::flash('success', 'Karyalaya updated successfully');
        return redirect()->route('karyalaya.index');
    }

    public function destroy($id)
    {
        // Karyalaya::destroy($id);
        // Session::flash('success','Karyalaya Deleted Successfully');
        // return redirect()->route('karyalaya.index');
    }
    public function viewreport($id)
    {
        //  dd($id);
        $karyalaya = Karyalaya::where('id', $id)->first();
        // $allpads = Pad::where('kar_id',$id)
        //                 ->where('status',1)
        //                 ->get();
        // dd($allpads);
        $karyalaya_employees = Employee::where('kar_id', $id)
            ->where('emp_status', 1)
            ->get();
        $countallpads = $karyalaya_employees->count();
        $emptypad = $karyalaya->employee_number - $countallpads;
        $karyalaya_all_pads = DB::table('employees')->where('kar_id', $id)
            ->where('emp_status', 1)
            ->select('pad_id', DB::raw('count(*) as total'))
            ->groupBy('pad_id')
            ->get();
        // dd($karyalaya_all_pads);

        // dd($karyalaya_employees);

        return view('admin.report.view_karyalaya_report')->with(compact(
            'karyalaya',
            'countallpads',
            'emptypad',
            'karyalaya_employees',
            'karyalaya_all_pads'
        ));
    }

    public function print_all_karyalayas()
    {
        $karyalayas = Karyalaya::all();
        // $allpads = Pad::all();
        $pad_info = DB::table('pads')
            ->where('status', 1)
            ->select('kar_id', DB::raw('count(*) as total'))
            ->groupBy('kar_id')
            ->get();
        //  dd($pad_info);

        return view('admin.report.allkaryalaya_report')->with(compact('karyalayas', 'pad_info'));
    }

    public function viewdetailreport($id)
    {
        //   dd($id);
        $karyalaya = Karyalaya::where('id', $id)->first();
        // $allpads = Pad::where('kar_id',$id)
        //                 ->where('status',1)
        //                 ->get();
        // dd($allpads);
        $karyalaya_employees = Employee::where('kar_id', $id)
            ->where('emp_status', 1)
            ->get();
        $countallpads = $karyalaya_employees->count();
        $emptypad = $karyalaya->employee_number - $countallpads;
        $karyalaya_all_pads = DB::table('employees')->where('kar_id', $id)
            ->where('emp_status', 1)
            ->select('pad_id', DB::raw('count(*) as total'))
            ->groupBy('pad_id')
            ->get();
        // dd($karyalaya_all_pads);

        // dd($karyalaya_employees);

        return view('admin.report.view_detail_karyalaya_report')->with(compact(
            'karyalaya',
            'countallpads',
            'emptypad',
            'karyalaya_employees',
            'karyalaya_all_pads'
        ));
    }
    // for viewing the karyalaya report

    public function viewkaryalayareport($id)
    {
        $karyalaya = Karyalaya::where('id', $id)->first();
        $kar_allpads = KaryalayaPad::where('karyalaya_id',$id)->get();
        // dd($kar_allpads);
        $nirdeshanalayas = Nirdeshanalaya::all();

        $karyalaya_employees = EmployeeCurrentRecord::where('karyalaya_id', $id)
            ->where('employee_status', 1)
            ->get();
        // dd($karyalaya_employees);

        $count_all_employees = $karyalaya_employees->count();
        // dd($count_all_employees);

        $emptypad = $karyalaya->employee_number - $count_all_employees;
        // dd($emptypad);

        $karyalaya_allworking_pads = DB::table('employee_current_records')->where('karyalaya_id', $id)
            ->where('employee_status', 1)
            ->select('pad_id', DB::raw('count(*) as total'))
            ->groupBy('pad_id')
            ->get();
        // dd($karyalaya_allworking_pads);

        return view('admin.report.final_view_karyalaya_report')->with(compact(
            'karyalaya',
            'count_all_employees',
            'emptypad',
            'karyalaya_employees',
            'karyalaya_allworking_pads',
            'nirdeshanalayas',
            'kar_allpads'
        ));
    }
}
