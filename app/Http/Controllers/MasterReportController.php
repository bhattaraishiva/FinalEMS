<?php

namespace App\Http\Controllers;

use App\EmployeeCurrentRecord;
use Illuminate\Http\Request;
use App\Ministry;
use App\Nirdeshanalaya;
use App\Karyalaya;
use App\Taha;
use App\Pad;
use App\Shreni;
use App\Sewa;
use App\Samuha;
use App\Upasamuha;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use DateTime;


class MasterReportController extends Controller
{
    function __construct(){
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ministries= Ministry::where('status','1')->get();
        $nirdeshanalayas= Nirdeshanalaya::where('status','1')->get();
        $karyalayas =Karyalaya::where('status','1')->get();
        $pads = Pad::where('status','0')->get();
        $sewas = Sewa::where('status','1')->get();
        $samuhas = Samuha::where('status','1')->get();
        $upasamuhas =Upasamuha::where('status','1')->get();
        $tahas = Taha::where('status','1')->get();
        $shrenis= Shreni::where('status','1')->get();
        // dd($shrenis);

        return view('admin.master_report.index')->with(compact(
            'ministries','nirdeshanalayas','karyalayas','pads','sewas','samuhas','upasamuhas','shrenis','tahas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // dd($request->all());
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

    public function masterSearch(Request $request){
        // dd($request->all());
        $searched_ministry = Ministry::where('id',$request->mastersearch_ministry)->get();
        $searched_nirdeshanalaya = Nirdeshanalaya::where('id',$request->mastersearch_nirdeshanalaya)->get();
        $searched_karyalaya = Karyalaya::where('id',$request->mastersearch_karyalaya)->get();
        // dd($searched_karyalaya);
        $searched_pad = Pad::where('id',$request->mastersearch_pad)->get();
        $searched_taha = Taha::where('id',$request->mastersearch_taha)->get();
        $searched_shreni = Shreni::where('id',$request->mastersearch_shreni)->get();
        $searched_sewa = Sewa::where('id',$request->mastersearch_sewa)->get();
        $searched_samuha = Samuha::where('id',$request->mastersearch_samuha)->get();
        $searched_upasamuha = Upasamuha::where('id',$request->mastersearch_upasamuha)->get();

        if( $request->master_search_employee_type=="samayojan"){
            $searched_employee_type = 'समायोजन';
        }else if( $request->master_search_employee_type=="kaam_kaj"){
            $searched_employee_type = "काम काज";
        }else if( $request->master_search_employee_type=="karar"){
            $searched_employee_type = "करार";
        }else if( $request->master_search_employee_type=="naya"){
            $searched_employee_type = "नयाँ";
        }else{
            $searched_employee_type = "-";

        }

        $q = EmployeeCurrentRecord::query();
        $search_option_count = 0;

        if ($request->filled('mastersearch_ministry'))
        {
            $q->where('ministry_id',$request->mastersearch_ministry);
            $search_option_count++;
        }
        if ($request->filled('mastersearch_nirdeshanalaya'))
        {   
            $q->where('nirdeshanalaya_id',$request->mastersearch_nirdeshanalaya);
            $search_option_count++;

        }
        if ($request->filled('mastersearch_karyalaya'))
        {
            $q->where('karyalaya_id',$request->mastersearch_karyalaya);
            $search_option_count++;

        }
        if ($request->filled('mastersearch_pad'))
        {
            $q->where('pad_id',$request->mastersearch_pad);
            $search_option_count=+5;

        }
        if ($request->filled('mastersearch_sewa'))
        {
            $q->where('sewa_id',$request->mastersearch_sewa);
            $search_option_count=+5;

        }
        if ($request->filled('mastersearch_samuha'))
        {
            $q->where('samuha_id',$request->mastersearch_samuha);
            $search_option_count=+5;

        }
        if ($request->filled('mastersearch_upasamuha'))
        {
            $q->where('upasamuha_id',$request->mastersearch_upasamuha);
            $search_option_count=+5;

        }
        if ($request->filled('mastersearch_shreni'))
        {
            $q->where('shreni_id',$request->mastersearch_shreni);
            $search_option_count=+5;

        }
        if ($request->filled('mastersearch_taha'))
        {
            $q->where('taha_id',$request->mastersearch_taha);
            $search_option_count=+5;

        }
        if ($request->filled('master_search_employee_type'))
        {
            $q->where('employee_type',$request->master_search_employee_type);
            $search_option_count=+5;

        }
        if ($request->filled('mastersearch_attendance_date_nep'))
        {   
            // dd('hello');
            // $q->where('attendance_date',$request->mastersearch_attendance_date_nep);
            $sdate = Carbon::parse($request->mastersearch_attendance_date_eng)->format('Y-m-d');
            // dd($sdate);

            $today = Carbon::now();
            $q->whereBetween('attendance_date_ad',[$sdate,$today]);
            $search_option_count=+5;

        }

        $search_results = $q
                            ->select(['*', DB::raw('IF(`taha_id` IS NOT NULL, `taha_id`, 1000000) `taha_id`')])
                            ->orderBy('taha_id','asc')
                            ->orderBy('shreni_id','asc')
                            ->orderBy('appointed_date','asc')
                            ->orderBy('attendance_date','asc')
                            ->get();
        // dd($search_results);

     
        if($search_option_count < 5){
            return view('admin.master_report.office_report')->with(compact('search_results'
            ,'searched_ministry','searched_nirdeshanalaya','searched_karyalaya','searched_pad',
            'searched_taha','searched_shreni','searched_samuha','searched_upasamuha','searched_sewa','searched_employee_type'
        ));
        }
        else{
            return view('admin.master_report.office_employee_report')->with(compact('search_results'
            ,'searched_ministry','searched_nirdeshanalaya','searched_karyalaya','searched_pad',
            'searched_taha','searched_shreni','searched_samuha','searched_upasamuha','searched_sewa','searched_employee_type'
        ));
        }

    }

}
