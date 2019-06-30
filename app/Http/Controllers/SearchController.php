<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Karyalaya;
use DB;
use App\Pad;

class SearchController extends Controller
{
    
    public function searchEmployee(Request $request){
        // dd($request->all());
        $search_type = $request['search_type'];
        $search = $request['search'];

        $employees = Employee::where($search_type,'like','%'.$search.'%')->get();

        // dd($searchresult);
        return view('admin.employee.index')->with('employees',$employees);

    }

    public function searchKaryalaya(Request $request){
        // dd($request->all());
        $search_type = $request['search_type'];
        $search = $request['search'];

        $karyalayas = Karyalaya::where($search_type,'like','%'.$search.'%')->get();

        // $karyalayas = Karyalaya::all(); 
        $allpads = Pad::all();
        $pad_info = DB::table('pads')
                 ->where('status',1)
                 ->select('kar_id', DB::raw('count(*) as total'))
                 ->groupBy('kar_id')
                //  
                 ->get();
                //  dd($pad_info);;
        return view('admin.karyalaya.index')->with(compact('karyalayas','pad_info'));


    }
}
