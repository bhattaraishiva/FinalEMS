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
        <div class="card-header"id ="uniform-style">
            नयाँ उप-समुह थप्नुहोस्।
        </div>

        <div class="card-body" id ="uniform-style">
            <form action="{{route('upasamuha.store')}}"method="post" >
                {{-- {{ csrf_field() }} --}}
            @csrf
            <div class="row">

                 <div class="form-group col-md-6">
                        <label for="name">सेवा चयन गर्नुहोस:</label>
                        <select name="sewa_id" id="sewa_id" class="form-control dynamic"
                        data-dependent='samuha_id'>
                            <option value="">Select a sewa</option>
                            @foreach ($sewas as $sewa)
                                <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>                        
                            @endforeach
                        </select>                    
                    </div>

                     <div class="form-group col-md-6">
                        <label for="name">समुह चयन गर्नुहोस:</label>
                        <select name="samuha_id" id="samuha_id" class="form-control">
                           <!--  <option value="">Select a samuha</option>
                            @foreach ($samuha as $samuha)
                                <option value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>                        
                            @endforeach -->
                        </select>                    
                    </div>

                <div class="form-group col-md-6" >
                    <label for="name">उप-समुह</label>
                    <input type="text" name="upasamuha_name" class="form-control" required>
                </div>
                <div class="form-group col-md-6" >
                    <label for="name">स्थिति:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">Available</option>
                        <option value="0">Unavalable</option>
                    </select>
                        
                </div>
            </div>
           
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-md btn-success" type="submit" style="float:left">सुरक्षित गर्नुहोस्</button>
                </div>
            </div>

            </form>
        </div>
    </div>    

@endsection