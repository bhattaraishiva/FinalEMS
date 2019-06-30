@extends('layouts.app')


@section('content')
    <div class="card card-default" id ="uniform-style">
        <div class="card-header" >
           Edit उप-समुह:{{$upasamuha->upasamuha_name}}
        </div>

        <div class="card-body">
            <form action="{{route('upasamuha.update',['upasamuha'=>$upasamuha->id ])}}"method="post" >
                {{-- {{ csrf_field() }} --}}
            @csrf
            {{-- {{method_field('put')}} --}}
            @method('put')
                <div class="row">

                    <div class="form-group col-md-6">
                    <label for="name">सेवा चयन गर्नुहोस:</label>
                    <select name="sewa_id" id="sewa" class="form-control">                        
                        @foreach ($sewas as $sewa)
                            @if($upasamuha->sewa_id == $sewa->id)
                                <option selected value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>        
                            @else
                                <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>        
                            @endif
                        @endforeach
                    </select>                
                </div>

                    <div class="form-group col-md-6">
                    <label for="name">समुह चयन गर्नुहोस:</label>
                    <select name="samuha_id" id="samuha" class="form-control">                        
                        @foreach ($samuha as $samuha)
                            @if($upasamuha->samuha_id == $samuha->id)
                                <option selected value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>        
                            @else
                                <option value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>        
                            @endif
                        @endforeach
                    </select>                
                </div>

                    <div class="form-group col-md-6 ">
                        <label for="name">उप-समुह:</label>
                        <input type="text" name="upasamuha_name" value="{{$upasamuha->upasamuha_name}}" class="form-control">
                    </div>
                    <div class="form-group col-md-6" >
                        <label for="name">स्थिति:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Available</option>
                            <option value="0">UnAvailable</option>
                        </select>
                         
                    </div>
                </div>
           
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-md btn-success" type="submit" style="float:left">अपडेट </button>
                </div>
            </div>

            </form>
        </div>
    </div>    

@endsection