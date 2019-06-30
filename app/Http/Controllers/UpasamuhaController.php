<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upasamuha;
use App\Sewa;
use App\Samuha;
use Session;
class UpasamuhaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $upasamuhas = upasamuha::all();
        // dd($upasamuhas);
        return view('admin.upasamuha.index')->with('upasamuhas',$upasamuhas);
    }

   
    public function create()
    {
        //
        $sewas=Sewa::where('status','=',1)->get();
        $samuha=Samuha::where('status','=',1)->get();
        return view('admin.upasamuha.create')->with('sewas',$sewas)
                                             ->with('samuha',$samuha);

    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'upasamuha_name'=>'required',
            'sewa_id'=>'required',
            'samuha_id'=>'required'
        ]);
        
        $upasamuha= new Upasamuha;
        $upasamuha->sewa_id = $request['sewa_id'];
        $upasamuha->samuha_id = $request['samuha_id'];
        $upasamuha->upasamuha_name =$request['upasamuha_name'];
        $upasamuha->status = $request['status'];
        $upasamuha->save();
        // upasamuha::create([
        //     'upasamuha_name'=>$request['upasamuha_name'],
        //     'status'=>$request['status']
        // ]);

        Session::flash('success','upasamuha Created Successfully!');

        return redirect()->route('upasamuha.index');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $sewas= Sewa::all();
        $samuha= Samuha::all();
        $upasamuha= Upasamuha::find($id);
        return view('admin.upasamuha.edit')->with(compact('sewas','samuha','upasamuha'));

    }

    
    public function update(Request $request, $id)
    {
        $upasamuha = Upasamuha::find($id);

        $upasamuha->sewa_id = $request['sewa_id'];
        $upasamuha->samuha_id = $request['samuha_id'];
        $upasamuha->upasamuha_name =$request['upasamuha_name'];
        $upasamuha->status = $request['status'];
        $upasamuha->save();

        Session::flash('success','upasamuha updated successfully');
        return redirect()->route('upasamuha.index');
    }

   
    public function destroy($id)
    {
        //
    }
}
