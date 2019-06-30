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
            नयाँ सेवा थप्नुहोस्।
        </div>

        <div class="card-body" id ="uniform-style">
            <form action="{{route('sewa.store')}}"method="post" >
                {{-- {{ csrf_field() }} --}}
            @csrf
            <div class="row">
                <div class="form-group col-md-6" >
                    <label for="name">सेवा:</label>
                    <input type="text" name="sewa_name" class="form-control" required>
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