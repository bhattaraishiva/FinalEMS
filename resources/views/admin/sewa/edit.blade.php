@extends('layouts.app')


@section('content')
    <div class="card card-default" id ="uniform-style">
        <div class="card-header" style="font-size:20px;">
           Edit सेवा:{{$sewa->sewa_name}}
        </div>

        <div class="card-body">
            <form action="{{route('sewa.update',['sewa'=>$sewa->id ])}}"method="post" >
                {{-- {{ csrf_field() }} --}}
            @csrf
            {{-- {{method_field('put')}} --}}
            @method('put')
                <div class="row">
                    <div class="form-group col-md-6 ">
                        <label for="name">सेवा:</label>
                        <input type="text" name="sewa_name" value="{{$sewa->sewa_name}}" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
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