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
use App\EmployeeCurrentRecord;
use App\Sewa;
use App\Samuha;
use App\Upasamuha;
use App\EmployeeAllRecord;
use App\EmployeeTraining;
use App\EmployeeForeignTour;
use App\EmployeeLeaveInfo;
use App\EmployeeMotivationInfo;
use App\EmployeePenaltyInfo;
use Auth;

use Session;

use App\EmployeePersonalDetail;
use DB;
use App\EducationInfo;

class EmployeeAllRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // dd($id);
        $employee = EmployeeCurrentRecord::where('employee_id', $id)->get();
        //  dd($employee);
        $shrenis = Shreni::where('status', 1)->get();
        $allpads = Pad::all();
        $pads = Pad::where('status', 0)->get();
        $tahas = Taha::where('status', 1)->get();
        $karyalayas = Karyalaya::where('status', 1)->get();
        $nirdeshanalayas = Nirdeshanalaya::where('status', 1)->get();
        $ministries = Ministry::where('status', 1)->get();
        $sewas = Sewa::where('status', 1)->get();

        return view('admin.employee_personal_detail.operate')->with(compact(
            'allpads',
            'nirdeshanalayas',
            'ministries',
            'karyalayas',
            'tahas',
            'pads',
            'shrenis',
            'employee',
            'sewas'
        ));
    }

    // store the information of employee activity ie leave or upgrade info
    public function storeActivity(Request $request)
    {
        //   dd($request->all());
        DB::transaction(function () use ($request) {
            $system_user_id = Auth::user()->id;
            $emp_id = $request->employee_id;
            $emp_number = $request->employee_number;
            $emp_type = $request->employee_type;
            $employee_activity = $request->employee_activity;
            $sec_employee_activity = $request->sec_employee_activity;

            $oldpad = $request->oldpad;

            $newpad = $request->pad;
            $employee_status = '1';
            $ministry_attendance_date = null;
            $padasthapan_appointed_date_from_ministry = null;
            $karyalaya_attendance_date = null;
            $operation_date = null;
            $samayojan_if_working_in_same_pradesh_kaamkaj_appointed_date=null;

            if ($employee_activity == 'samayojan') {
                $operation_date = $request['oper_samayojan_appointed_date'];
                $sewa = $request['oper_samayojan_sewa'];
                $samuha = $request['oper_samayojan_samuha'];
                $upasamuha = $request['oper_samayojan_upasamuha'];
                $taha = $request['oper_samayojan_taha'];
                $shreni = $request['oper_samayojan_shreni'];
                $ministry = $request['oper_samayojan_ministry'];
                $nirdeshanalaya = $request['oper_samayojan_nirdeshanalaya'];
                $karyalaya = $request['oper_samayojan_karyalaya'];
                $pad = $request['oper_samayojan_pad'];
                $oper_samayojan_chief_ministry_attendance_date = $request['oper_samayojan_chief_ministry_attendance_date'];
            }

            // $count_pad = DB::table('employees')->where('pad_id', $pad)->count();

            // // dd($count_pad);
            // $pads_info=Pad::where('id',$pad)->get();
            // $total_pad= $pads_info[0]->pad_quantity;

            // if ($count_pad >= $total_pad) {

            //     Pad::where('id',$pad)
            //     ->update ([
            //     'status' =>'1',
            //     ]);

            // }

            else if ($employee_activity == 'padasthapan') {
                $ministry_attendance_date = $request['oper_padasthapan_attendance_date_to_ministry'];
                $padasthapan_appointed_date_from_ministry = $request['oper_padasthapan_appointed_date_from_ministry'];
                $sewa = $request['oper_padasthapan_sewa'];
                $samuha = $request['oper_padasthapan_samuha'];
                $upasamuha = $request['oper_padasthapan_upasamuha'];
                $taha = $request['oper_padasthapan_taha'];
                $shreni = $request['oper_padasthapan_shreni'];
                $ministry = $request['oper_padasthapan_ministry'];
                $nirdeshanalaya = $request['oper_padasthapan_nirdeshanalaya'];
                $karyalaya = $request['oper_padasthapan_karyalaya'];
                $pad = $request['oper_padasthapan_pad'];
                $karyalaya_attendance_date = $request['oper_padasthapan_attendance_date'];
            } else if ($employee_activity == 'saruwa') {
                $operation_date = $request['oper_saruwa_appointed_date'];
                $sewa = $request['oper_saruwa_sewa'];
                $samuha = $request['oper_saruwa_samuha'];
                $upasamuha = $request['oper_saruwa_upasamuha'];
                $taha = $request['oper_saruwa_taha'];
                $shreni = $request['oper_saruwa_shreni'];
                $ministry = $request['oper_saruwa_ministry'];
                $nirdeshanalaya = $request['oper_saruwa_nirdeshanalaya'];
                $karyalaya = $request['oper_saruwa_karyalaya'];
                $pad = $request['oper_saruwa_pad'];
            } else if ($employee_activity == 'baduwa') {
                $operation_date = $request['oper_baduwa_appointed_date'];
                $sewa = $request['oper_baduwa_sewa'];
                $samuha = $request['oper_baduwa_samuha'];
                $upasamuha = $request['oper_baduwa_upasamuha'];
                $taha = $request['oper_baduwa_taha'];
                $shreni = $request['oper_baduwa_shreni'];
                $ministry = $request['oper_baduwa_ministry'];
                $nirdeshanalaya = $request['oper_baduwa_nirdeshanalaya'];
                $karyalaya = $request['oper_baduwa_karyalaya'];
                $pad = $request['oper_baduwa_pad'];
            } else if ($employee_activity == 'nilamban') {
                $operation_date = $request['oper_nilamban_appointed_date'];
                $sewa = $request['oper_nilamban_sewa'];
                $samuha = $request['oper_nilamban_samuha'];
                $upasamuha = $request['oper_nilamban_upasamuha'];
                $taha = $request['oper_nilamban_taha'];
                $shreni = $request['oper_nilamban_shreni'];
                $ministry = $request['oper_nilamban_ministry'];
                $nirdeshanalaya = $request['oper_nilamban_nirdeshanalaya'];
                $karyalaya = $request['oper_nilamban_karyalaya'];
                $pad = $request['oper_nilamban_pad'];
                $employee_status = '0';
            } else if ($employee_activity == 'awakash') {
                $operation_date = $request['oper_awakash_appointed_date'];
                $sewa = $request['oper_awakash_sewa'];
                $samuha = $request['oper_awakash_samuha'];
                $upasamuha = $request['oper_awakash_upasamuha'];
                $taha = $request['oper_awakash_taha'];
                $shreni = $request['oper_awakash_shreni'];
                $ministry = $request['oper_awakash_ministry'];
                $nirdeshanalaya = $request['oper_awakash_nirdeshanalaya'];
                $karyalaya = $request['oper_awakash_karyalaya'];
                $pad = $request['oper_awakash_pad'];
                $employee_status = '0';
            } else if ($employee_activity == 'rajinama') {
                $operation_date = $request['oper_rajinama_appointed_date'];
                $sewa = $request['oper_rajinama_sewa'];
                $samuha = $request['oper_rajinama_samuha'];
                $upasamuha = $request['oper_rajinama_upasamuha'];
                $taha = $request['oper_rajinama_taha'];
                $shreni = $request['oper_rajinama_shreni'];
                $ministry = $request['oper_rajinama_ministry'];
                $nirdeshanalaya = $request['oper_rajinama_nirdeshanalaya'];
                $karyalaya = $request['oper_rajinama_karyalaya'];
                $pad = $request['oper_rajinama_pad'];
                $employee_status = '0';
            } else if ($employee_activity == 'sangh_firta') {
                $operation_date = $request['oper_sangh_firta_appointed_date'];
                $sewa = $request['oper_sangh_firta_sewa'];
                $samuha = $request['oper_sangh_firta_samuha'];
                $upasamuha = $request['oper_sangh_firta_upasamuha'];
                $taha = $request['oper_sangh_firta_taha'];
                $shreni = $request['oper_sangh_firta_shreni'];
                $ministry = $request['oper_sangh_firta_ministry'];
                $nirdeshanalaya = $request['oper_sangh_firta_nirdeshanalaya'];
                $karyalaya = $request['oper_sangh_firta_karyalaya'];
                $pad = $request['oper_sangh_firta_pad'];
                $employee_status = '0';

                // this section isfor secondary activity
            } else if ($sec_employee_activity == 'training') {
                EmployeeTraining::create([
                    'system_user_id'=>$system_user_id,
                    'employee_id' => $emp_id,
                    'employee_number' => $emp_number,
                    'training_type' => $request['training_type'],
                    'training_institute' => $request['training_institute'],
                    'training_start_date' => $request['training_start_date'],
                    'training_end_date' => $request['training_end_date'],
                    'training_division' => $request['training_division'],
                ]);
            } else if ($sec_employee_activity == 'foreign_tour') {
                EmployeeForeignTour::create([
                    'system_user_id'=>$system_user_id,
                    'employee_id' => $emp_id,
                    'employee_number' => $emp_number,
                    'ftour_info' => $request['ftour_info'],
                    'ftour_country' => $request['ftour_country'],
                    'ftour_objective' => $request['ftour_objective'],
                    'ftour_start_date' => $request['ftour_start_date'],
                    'ftour_end_date' => $request['ftour_end_date'],
                ]);
            } else if ($sec_employee_activity == 'leave') {
                EmployeeLeaveInfo::create([
                    'system_user_id'=>$system_user_id,
                    'employee_id' => $emp_id,
                    'employee_number' => $emp_number,
                    'ftour_info' => $request['ftour_info'],
                    'leave_type' => $request['leave_type'],
                    'leave_start_date' => $request['leave_start_date'],
                    'leave_end_date' => $request['leave_end_date'],
                ]);
            } else if ($sec_employee_activity == 'motivation') {
                EmployeeMotivationInfo::create([
                    'system_user_id'=>$system_user_id,

                    'employee_id' => $emp_id,
                    'employee_number' => $emp_number,
                    'motivation_name' => $request['motivation_name'],
                    'motivation_provider' => $request['motivation_provider'],
                    'motivation_date' => $request['motivation_date'],
                ]);
            } else if ($sec_employee_activity == 'penalty') {
                EmployeePenaltyInfo::create([
                    'system_user_id'=>$system_user_id,

                    'employee_id' => $emp_id,
                    'employee_number' => $emp_number,
                    'penalty_desc'=>$request['penalty_name'],
                    'penalty_decision_date' => $request['penalty_decision_date'],
                    'penalty_start_date' => $request['penalty_start_date'],
                    'penalty_end_date' => $request['penalty_end_date'],
                ]);
            }
            if (
                $employee_activity == 'samayojan' || $employee_activity == 'padasthapan' ||
                $employee_activity == 'saruwa' || $employee_activity == 'baduwa' ||
                $employee_activity == 'nilamban' || $employee_activity == 'awakash' ||
                $employee_activity == 'rajinama' || $employee_activity == 'sangh_firta'
            ) {
                EmployeeAllRecord::create([
                    'system_user_id'=>$system_user_id,

                    'employee_id' => $emp_id,
                    'employee_number' => $emp_number,
                    'employee_type' => $emp_type,
                    'employee_activity' => $employee_activity,
                    'operation_date' => $operation_date,

                    'sewa_id' => $sewa,
                    'samuha_id' => $samuha,
                    'upasamuha_id' => $upasamuha,
                    'taha_id' => $taha,
                    'shreni_id' => $shreni,
                    'ministry_id' => $ministry,
                    'nirdeshanalaya_id' => $nirdeshanalaya,
                    'karyalaya_id' => $karyalaya,
                    'pad_id' => $pad,
                    'ministry_attendance_date' => $ministry_attendance_date,
                    'padasthapan_appointed_date_from_ministry' => $padasthapan_appointed_date_from_ministry,
                    'karyalaya_attendance_date' => $karyalaya_attendance_date,
                ]);
                EmployeeCurrentRecord::where('employee_id', $emp_id)
                    ->update([
                        'system_user_id'=>$system_user_id,

                        'sewa_id' => $sewa,
                        'samuha_id' => $samuha,
                        'upasamuha_id' => $upasamuha,
                        'taha_id' => $taha,
                        'shreni_id' => $shreni,
                        'ministry_id' => $ministry,
                        'nirdeshanalaya_id' => $nirdeshanalaya,
                        'karyalaya_id' => $karyalaya,
                        'pad_id' => $pad,
                        'employee_type' => $emp_type,
                        'employee_status' => $employee_status
                    ]);
                // Pad::where('id', $oldpad)
                //     ->update([
                //         'status' => '0',
                //     ]);
            }
        });
        Session::flash('success', 'Employess Upgraded Record Successfully Stored');
        return redirect()->route('employeepersonaldetail.index');
    }

    //view activity report of employee

    public function view_employee_report($id)
    {
        // dd($id);
        $employee = EmployeeCurrentRecord::where('employee_id', $id)->first();
        // dd($employee);
        $employee_allrecords = EmployeeAllRecord::orderBy('id', 'DESC')
            ->where('employee_id', $id)
            ->get();
        //    dd($employee_allrecords);
        $emp_edu_details = EducationInfo::where('employee_id',$id)->get();
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
        $emp_foreign_tours = EmployeeForeignTour::where('employee_id',$id)->get();
        $emp_trainings = EmployeeTraining::where('employee_id',$id)->get();
        $emp_leaves = EmployeeLeaveInfo::where('employee_id',$id)->get();
        $emp_motivations = EmployeeMotivationInfo::where('employee_id',$id)->get();
        $emp_penalties = EmployeePenaltyInfo::where('employee_id',$id)->get();
        return view('admin.report.final_view_employee_allreport')->with(compact(
            'allpads',
            'nirdeshanalayas',
            'ministries',
            'karyalayas',
            'tahas',
            'pads',
            'shrenis','emp_penalties',
            'employee','emp_motivations',
            'employee_allrecords','emp_leaves',
            'sewas','emp_trainings',
            'samuhas','emp_foreign_tours',
            'upasamuhas','emp_edu_details'
        ));
    }
}
