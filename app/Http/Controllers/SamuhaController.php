<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Samuha;
use App\Sewa;
use Session;
class SamuhaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $samuhas = Samuha::all();
        return view('admin.samuha.index')->with('samuhas',$samuhas);
    }

   
    public function create()
    {
        //
        $sewas=Sewa::where('status','=',1)->get();
        return view('admin.samuha.create')->with('sewas',$sewas);

    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'samuha_name'=>'required',
            'sewa_id'=>'required'
        ]);
        
        $samuha = new Samuha;
        $samuha->sewa_id = $request['sewa_id'];
        $samuha->samuha_name = $request['samuha_name'];
        $samuha->status = $request['status'];
        $samuha->save();
        // Samuha::create([
        //     'samuha_name'=>$request['samuha_name'],
        //     'status'=>$request['status']
        // ]);

        Session::flash('success','samuha Created Successfully!');

        return redirect()->route('samuha.index');
    }

    
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
        $samuha= Samuha::find($id);
        $sewas= Sewa::all();
        return view('admin.samuha.edit')->with(compact('sewas','samuha'));

    }

    
    public function update(Request $request, $id)
    {
        $samuha = Samuha::find($id);

        $samuha->sewa_id = $request['sewa_id'];
        $samuha->samuha_name = $request['samuha_name'];
        $samuha->status = $request['status'];
        $samuha->save();

        Session::flash('success','samuha updated successfully');
        return redirect()->route('samuha.index');
    }

   
    public function destroy($id)
    {
        //
    }
}
