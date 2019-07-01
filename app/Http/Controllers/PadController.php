<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ministry;
use App\Nirdeshanalaya;
use App\Karyalaya;
use App\Taha;
use App\Pad;
use App\KaryalayaPad;
use Session;
use DB;
use App\EmployeeCurrentRecord;

class PadController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {                       
        return view('admin.pad.index')->with('pads',Pad::all());
    }
    
    public function create()
    {        
        return view('admin.pad.create')->with('ministries',Ministry::where('status',1)->get())
                                        ->with('nirdeshanalayas',Nirdeshanalaya::where('status',1)->get())
                                        ->with('karyalayas',Karyalaya::where('status',1)->get())
                                        ;
    }
    
    public function store(Request $request)
    {     
        // dd($request->all());  
        $this->validate($request,[
            'pad'=>'required'
        ]);


        
        Pad::create([
            'pad_name'=>$request['pad'],
            'status'=>$request['status']

        ]);

        Session::flash('success','Pad Created Successfully!');
        return redirect()->route('pad.index');
    }
  
    public function show($id)
    {        
    }
    
    public function edit($id)
    {               
        $pad = Pad::find($id);    
        // $tahas = Taha::where('status',1)->get();
        $karyalayas= Karyalaya::where('status',1)->get();
        $nirdeshanalayas =Nirdeshanalaya::where('status',1)->get();
        $ministries=Ministry::where('status',1)->get();

        return view('admin.pad.edit')->with(compact('nirdeshanalayas','ministries','karyalayas','pad'));        
    }
    
    public function update(Request $request, $id)
    {

        $pad = Pad::find($id);
        // $pad->taha_id= $request->taha;
        $pad->pad_name= $request->pad;
        $pad->status= $request->status;      
        $pad->save();

        Session::flash('success','पद सम्पादन भयो ।');
        return redirect()->route('pad.index');

    }

    public function destroy($id)
    {        
    }
    
    public function viewpadreport(){
        $pads = DB::table('pads')->orderBy('id','asc')->get();
        // dd($pads);
        $pad_sum = array();
        $working_pad_sum = array();
        foreach ($pads as $p) {
            $id = $p->id;
            // echo($id ."\n");
            $pad_sum[] = $this->count_pad_qnty($id);
            $working_pad_sum[] = $this->count_working_pad_qnty($id);
            }
            // print_r($working_pad_sum);

        return view('admin.report.view_pad_report')->with(compact('pads','pad_sum','working_pad_sum'));
    }

    // count total pad quantity
    public function count_pad_qnty($id){
        // dd($id);
        $count_pad= KaryalayaPad::where('pad_id',$id)->get();
        $sum=0;
        foreach ($count_pad as $cp) {
            # code...
            $sum += $cp->pad_qty;
        }
        return $sum;
    }
    // count empty pad 
    public function count_working_pad_qnty($id){
        // dd($id);
        $karyalaya_allworking_pads = DB::table('employee_current_records')->where('pad_id', $id)
        ->where('employee_status', 1)
        ->select('pad_id', DB::raw('count(*) as total'))
        ->groupBy('pad_id')
        ->get();
        $c= $karyalaya_allworking_pads->count();
        if($c > 0){
         $available_pad = $karyalaya_allworking_pads[0]->total;
        }else{
            $available_pad= 0;
        }
        // dd($available_pad);
       
        return $available_pad;

    }
}
