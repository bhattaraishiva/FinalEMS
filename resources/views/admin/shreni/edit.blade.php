@extends('layouts.app')
@section('page_title')
श्रेणी
@endsection
@section('breadcum_title')
<li><a href="{{route('shreni.index')}}">श्रेणी</a></li>
@endsection
@section('form_title')
श्रेणी बिबरण।
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
        <h2 class="box-title">Edit तह:{{$shreni->shreni_name}}</h2>

    </div>
    <div class="card-body" id="uniform-style">
        <form action="{{route('shreni.update',['shreni'=>$shreni->id ])}}"method="post" >
            @csrf
            @method('put')
            <div class="box-body">
                <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6" id="uniform-style">
                                <label for="name">श्रेणी:</label>
                                <input type="text" name="shreni_name" value="{{$shreni->shreni_name}}" class="form-control">
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

  