@extends('layouts.app')
@section('page_title')
समुह
@endsection
@section('breadcum_title')
<li><a href="{{route('samuha.index')}}">समुह</a></li>
@endsection
@section('form_title')
समुह बिबरण।
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
        <h2 class="box-title">Edit समुह :{{$samuha->samuha_name}}
        </h2>

    </div>
    <div class="card-body" id="uniform-style">
        <form action="{{route('samuha.update',['samuha'=>$samuha->id ])}}"method="post" >
            @csrf
            @method('put')
            <div class="box-body">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">सेवा:</label>
                            <select name="sewa_id" id="sewa" class="form-control chosen">
                                @foreach ($sewas as $sewa)
                                    @if($samuha->sewa_id == $sewa->id)
                                        <option selected value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
                                    @else
                                        <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">समुहको नाम:</label>
                            <input type="text" name="samuha_name" value="{{$samuha->samuha_name}}" class="form-control">
                        </div>
                        <div class="form-group col-md-4" >
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

