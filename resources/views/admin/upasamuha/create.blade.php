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
        <h2 class="box-title" id="uniform-style">उप-समुह विवरण </h2>
    </div>
    <div class="card-body" >
        <form action="{{route('upasamuha.store')}}" method="post">
            @csrf
            <div class="box-body">
                <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">सेवा:</label>
                        <select name="sewa_id" id="sewa_id" class="form-control dynamic"
                        data-dependent='samuha_id'>
                            <option value="">Select a sewa</option>
                            @foreach ($sewas as $sewa)
                                <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>                        
                            @endforeach
                        </select>        
                            </div>
                             <div class="form-group col-md-6">
                        <label for="name">समुह:</label>
                        <select name="samuha_id" id="samuha_id" class="form-control dynamic"
                        data-dependent="upasamuha_id">
                           <!--  <option value="">Select a samuha</option>
                            @foreach ($samuha as $samuha)
                                <option value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>                        
                            @endforeach -->
                        </select>                    
                    </div>
                    <div class="form-group col-md-6" >
                    <label for="name">उप-समुह</label>
                    <input type="text" id="upasamuha_id" name="upasamuha_name" class="form-control" required>
                </div>
                            <div class="form-group col-md-6" id="uniform-style">
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




