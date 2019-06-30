@extends('layouts.app')
@section('page_title')
पद
@endsection
@section('breadcum_title')
<li><a href="{{route('employeepersonaldetail.index')}}">पद</a></li>
@endsection
@section('form_title')
पद बिबरण।
@endsection
@section('box_title')
पद बिबरण विस्तृतमा
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
        <h2 class="box-title">पद विवरण </h2>
    </div>
    <div class="card-body" id="uniform-style">
        <form action="{{route('pad.store')}}" method="post">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">पद</label>
                        <input type="text" id="pad_id" name="pad" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Status:</label>
                            <select name="status" id="status" class="form-control chosen">
                                <option value="0">Available</option>
                                <option value="1">Unavalable</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="box-footer form-group">
                    <div>
                        <input type="checkbox" name="confirmsave" id="confirmsave"> सबै विवरण सहि छन्।
                        <button class=" form-control btn btn-info" id="saveactivity" type="submit" disabled
                            style="font-size:18px;">सुरक्षित
                            गर्नुहोस</button>
                    </div>
                    {{-- <button type="submit" class=" form-control btn btn-info pull-right">सुरक्षित गर्नुहोस</button> --}}
                </div>
            </div>
        </form>
    </div>

</div>

@endsection