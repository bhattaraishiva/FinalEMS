@extends('layouts.app')
@section('page_title')
समुह
@endsection
@section('breadcum_title')
<li><a href="{{route('samuha.index')}}">समुह</a></li>
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
        <h2 class="box-title" id="uniform-style">समुह विवरण </h2>
    </div>
    <div class="card-body" >
        <form action="{{route('samuha.store')}}" method="post">
            @csrf
            @if ($sewas->count() > 0)
            <div class="box-body">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">सेवा:</label>
                            <select name="sewa_id" id="sewa" class="form-control chosen">
                                <option value="">सेवा</option>
                                @foreach ($sewas as $sewa)
                                    <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="name">समुह नाम:</label>
                            <input type="text" name="samuha_name" class="form-control">
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
                At First Create Sewa..
              </div>
        </div>

        @endif
    </div>

</div>

@endsection



