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
    <div class="card-header" id="uniform-style">
        अपडेट कार्यालय:{{$karyalaya->kar_name}}
    </div>
    <div class="card-body" id="uniform-style">
        <form action="{{route('karyalaya.update',['karyalaya'=>$karyalaya->id ])}}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">मन्त्रालय चयन गर्नुहोस:</label>
                        <select name="ministry_id" id="ministry" class="form-control">
                            @foreach ($ministries as $ministry)
                            @if($karyalaya->ministry_id == $ministry->id)
                            <option selected='selected' value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                            @else
                            <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">निर्देशनालय चयन गर्नुहोस:</label>
                        <select name="nirdeshanalaya" id="nirdeshanalaya" class="form-control">
                            <option value="">निर्देशनालय</option>
                            @foreach ($nirdeshanalayas as $nirdeshanalaya)
                            @if($karyalaya->nirdeshanalaya_id == $nirdeshanalaya->id)
                            <option selected='selected' value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}
                            </option>
                            @else
                            <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">कार्यालय कोड:</label>
                        <input type="text" name="karyalaya_code" class="form-control"
                            value="{{$karyalaya->karyalaya_code}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">कार्यालय:</label>
                        <input type="text" name="karyalaya" class="form-control" value="{{$karyalaya->kar_name}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">कार्यालयको ठेगाना:</label>
                        <input type="text" name="address" class="form-control"
                            value="{{$karyalaya->karyalaya_address}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">दरबन्दि संख्या:</label>
                        <input type="number" min="0" name="employee_number" class="form-control"
                            value="{{$karyalaya->employee_number}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Status:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Available</option>
                            <option value="0">Unavalable</option>
                        </select>
                    </div>
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