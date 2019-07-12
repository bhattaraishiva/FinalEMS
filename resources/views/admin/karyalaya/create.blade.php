@extends('layouts.app')
@section('page_title')
कार्यालय
@endsection
@section('breadcum_title')
<li><a href="{{route('karyalaya.index')}}">कार्यालय</a></li>
@endsection
@section('form_title')
कार्यालय बिबरण।
@endsection
@section('box_title')
कार्यालय बिबरण विस्तृतमा
@endsection
@section('content')
<!-- right column -->
@if (count($errors) > 0)
<ul class="list-group ">
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger alert-dismissible">
        {{$error}}
        <button type="button" class="close" data-dismiss="alert">X</button>
    </li>
    @endforeach
</ul>
@endif

<div class="box box-info" id="uniform-style">
    <div class="box-header with-border">
        <h2 class="box-title">कार्यालय विवरण </h2>
    </div>
    <!-- /.box-header -->
    <!-- form start -->

    <form method="post" enctype="multipart/form-data" action="{{route('karyalaya.store')}}">
        @csrf
        <div class="box-body">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">मन्त्रालय:</label>
                        <select name="ministry_id" id="ministry_id" class="form-control chosen">
                            <option value="">मन्त्रालय</option>
                            @foreach ($ministries as $ministry)
                            <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">निर्देशनालय:</label>
                        <select name="nirdeshanalaya" id="nirdeshanalaya_id" class="form-control chosen">
                            <option value="">निर्देशनालय</option>
                            @foreach ($nirdeshanalayas as $nirdeshanalaya)
                            <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">कार्यालय कोड:</label>
                        <input type="text" name="karyalaya_code" class="form-control" placeholder="कार्यालय कोड"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">कार्यालयको नाम :</label>
                        <input type="text" name="karyalaya" class="form-control" placeholder="कार्यालय" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">कार्यालयको ठेगाना:</label>
                        <input type="text" name="address" class="form-control" placeholder="कार्यालयको ठेगाना" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">दरबन्दि संख्या:</label>
                        <input type="number" min="1" name="employee_number" class="form-control"
                            placeholder="दरबन्दि संख्या" id= "employee_number"required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Status:</label>
                        <select name="status" id="status" class="form-control chosen">
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
                                    <th>पद </th>
                                    <th>संख्या</th>
                                    <th><input type="button" value="+" class="btn btn-info addRowforpad"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
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

        </div>

        {{-- <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-lg btn-success" type="submit" style="float:left">सुरक्षित
                            गर्नुहोस</button>
                    </div>
                </div> --}}

        <!-- /.box-body -->
        <div class="box-footer form-group">
            <div>
                <input type="checkbox" name="confirmsave" id="confirmsave"> सबै विवरण सहि छन्।
                <button class=" form-control btn btn-info" id="saveactivity" type="submit" disabled
                    style="font-size:18px;">सुरक्षित
                    गर्नुहोस</button>
            </div>
            {{-- <button type="submit" class=" form-control btn btn-info pull-right">सुरक्षित गर्नुहोस</button> --}}
        </div>
        <!-- /.box-footer -->
    </form>
</div>

<!-- /.box -->

<!--/.col (right) -->
@endsection