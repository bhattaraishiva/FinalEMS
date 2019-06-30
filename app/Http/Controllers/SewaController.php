<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sewa;
use Session;

class SewaController extends Controller
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
        $sewas = Sewa::all();
        return view('admin.sewa.index')->with('sewas',$sewas);
    }

   
    public function create()
    {
        //
        return view('admin.sewa.create');
    }

  
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'sewa_name'=>'required'
        ]);
        
        Sewa::create([
            'sewa_name'=>$request['sewa_name'],
            'status'=>$request['status']
        ]);

        Session::flash('success','sewa Created Successfully!');

        return redirect()->route('sewa.index');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        return view('admin.sewa.edit')->with('sewa',Sewa::find($id));

    }

    
    public function update(Request $request, $id)
    {
        $sewa = Sewa::find($id);

        $sewa->sewa_name= $request->sewa_name;
        $sewa->status= $request->status;

        $sewa->save();

        Session::flash('success','sewa updated successfully');
        return redirect()->route('sewa.index');
    }

   
    public function destroy($id)
    {
        //
    }
}
