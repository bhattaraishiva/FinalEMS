@extends('layouts.app')
@section('content')
    @if (count($errors) > 0)
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>        
    @endif
    <div class="card card-default">
        <div class="card-header" id ="uniform-style">
            Update Taha:{{$taha->taha_name}}
        </div>

        <div class="card-body" id ="uniform-style">
            <form action="{{route('taha.update',['taha'=>$taha->id ])}}"method="post" >        
                @csrf
                @method('put')
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Taha Name:</label>
                    <input type="text" name="taha" value="{{$taha->taha_name}}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">Available</option>
                        <option value="0">Unavalable</option>
                    </select>                        
                </div>
            </div>
           
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-lg btn-success" type="submit" style="float:left">अपडेट </button>
                </div>
            </div>
            </form>
        </div>
    </div>    
@endsection