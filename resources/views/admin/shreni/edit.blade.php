@extends('layouts.app')


@section('content')
    <div class="card card-default" id ="uniform-style">
        <div class="card-header" style="font-size:20px;">
           Edit श्रेणी:{{$shreni->shreni_name}}
        </div>

        <div class="card-body">
            <form action="{{route('shreni.update',['shreni'=>$shreni->id ])}}"method="post" >
                {{-- {{ csrf_field() }} --}}
            @csrf
            {{-- {{method_field('put')}} --}}
            @method('put')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">श्रेणी:</label>
                        <input type="text" name="shreni_name" value="{{$shreni->shreni_name}}" class="form-control">
                    </div>
                    <div class="form-group col-md-6" style="font-size:20px;">
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