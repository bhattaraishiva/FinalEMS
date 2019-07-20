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
                            value="{{$karyalaya->employee_number}}"  id= "employee_number">
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
            <h2>कार्यालयको पद संख्या विवरण </h2>
                <div class="row">
                    <div class="form-group col-md-12">
                        <table class="table table-borderd ">
                            <thead>
                                <tr>
                                    <th>क्र.सं.</th>
                                    <th>पद </th>
                                    <th>संख्या</th>
                                    <th><input type="button" value="+" class="btn btn-info addRowforpad"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="serial_no[]" class="form-control serial_no"></td>
                                    <td><select class="form-control " name="pad[]">
                                            <option>पद </option>
                                            @foreach($pads as $pad)
                                            <option value="{{ $pad->id }}">{{ $pad->pad_name }}</option>
                                            @endforeach
                                        </select>
                                     </td>
                                    <td><input type="number"  min="1" name="pad_qty[]" class="form-control pad_qty"></td>
                                    <td><button type="button" class="btn btn-danger removepad">-</button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                    <td style="border:none"></td>
                                    <td style="border:none"><b>जम्मा पद संख्या (दरबन्दी संख्या भन्दा बढी हुनु हुदैन )</b></td>
                                    <td><input type="text" class="form-control total_pad" id="total_pad" readonly></td>
                                    <td style="border:none"></td>

                            </tfoot>

                        </table>
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