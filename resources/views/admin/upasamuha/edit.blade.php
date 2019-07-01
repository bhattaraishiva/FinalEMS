@extends('layouts.app')

@section('page_title')
उप-समुह
@endsection

@section('breadcum_title')
<li><a href="{{route('upasamuha.index')}}">उप-समुह</a></li>

@endsection


@section('content')
<!-- right column -->
@if (count($errors) > 0)
<ul class="list-group">
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">
        {{$error}}
    </li>
    @endforeach
</ul>
@endif

    <div class="box box-info" id="uniform-style">
    <div class="box-header with-border">
        <h3 class="box-title">Edit उप-समुह :{{$upasamuha->upasamuha_name}} </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post"  action="{{route('upasamuha.update',['upasamuha'=>$upasamuha->id ])}} enctype="multipart/form-data"">
        @csrf
        @method('put')
        <div class="box-body">
            <div class="form-group">
                <div class="row">

                    <div class="col-sm-6">
                          <label for="name">सेवा:</label>
                    <select name="sewa_id" id="sewa_id" class="form-control dynamic" data-dependent='samuha_id'>                        
                        @foreach ($sewas as $sewa)
                            @if($upasamuha->sewa_id == $sewa->id)
                                <option selected value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>        
                            @else
                                <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>        
                            @endif
                        @endforeach
                    </select>            
                    </div>

                    <div class="col-sm-6">
                        <label for="name">समुह:</label>
                    <select name="samuha_id" id="samuha_id" class="form-control dynamic" data-dependent='upasamuha_id'>                        
                        @foreach ($samuha as $samuha)
                            @if($upasamuha->samuha_id == $samuha->id)
                                <option selected value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>        
                            @else
                                <option value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>        
                            @endif
                        @endforeach
                    </select>      
                    </div>

                    <div class="col-sm-6">
                        <label for="name">उप-समुह:</label>
                        <input type="text" name="upasamuha_name" id="upasamuha_id" value="{{$upasamuha->upasamuha_name}}" class="form-control">
                    </div>

                    <div class="col-sm-6">
                        <label for="name">Status:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Available</option>
                            <option value="0">UnAvailable</option>
                        </select>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer form-group">
            {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
            <button type="submit" class=" form-control btn btn-info pull-right">सुरक्षित गर्नुहोस</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
<!-- /.box -->

<!--/.col (right) -->
@endsection