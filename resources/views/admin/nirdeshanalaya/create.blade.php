@extends('layouts.app')
@section('page_title')
निर्देशनालय
@endsection
@section('breadcum_title')
<li><a href="{{route('nirdeshanalaya.index')}}">निर्देशनालय</a></li>
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
<div class="box box-info">
    <div class="box-header with-border" >
        <h2 class="box-title" id="uniform-style">निर्देशनालय विवरण </h2>
    </div>
    <div class="card-body" >
        <form action="{{route('nirdeshanalaya.store')}}" method="post">
            @csrf
            @if ($ministries->count() > 0)
            <div class="box-body">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">मन्त्रालय चयन गर्नुहोस:</label>
                            <select name="ministry_id" id="ministry" class="form-control chosen">
                                <option value="">मन्त्रालय चयन गर्नुहोस</option>
                                @foreach ($ministries as $ministry)
                                    <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="name">निर्देशनालयको नाम:</label>
                            <input type="text" name="nirdeshanalaya_name" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="name">Status:</label>
                            <select name="status" id="status" class="form-control chosen">
                                <option value="1">Available</option>
                                <option value="0">Unavalable</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="box-footer form-group">
                    <div>
                        <input type="checkbox" name="confirmsave" id="confirmsave"> सबै विवरण सहि छन् ।
                        <button class=" form-control btn btn-info" id="saveactivity" type="submit" disabled
                            style="font-size:18px;">सुरक्षित
                            गर्नुहोस</button>
                    </div>
                    {{-- <button type="submit" class=" form-control btn btn-info pull-right">सुरक्षित गर्नुहोस</button> --}}
                </div>
            </div>

        </form>
        @else
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                At First Create Ministry..
              </div>
        </div>

        @endif
    </div>

</div>

@endsection

