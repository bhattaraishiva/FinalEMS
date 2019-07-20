@extends('layouts.app')
@section('page_title')
गृह 
@endsection
    @section('content')

        
            <div class="card" id ="uniform-style">

                
                  <div>
                    <img src="{{asset('images/logo.svg')}}" alt="logo" style=" margin-left: auto; margin-right: auto ;width: 40%; display: block;">
                </div>
                <div class="card-header" style="text-align: center">
                    <b><h3>ड्यासबोर्डमा स्वागत छ</h3></b>.
                </div>
                <div class="card-body" style="text-align: center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <b><h3>तपाई लग इन हुनुहुन्छ!</h3></b>
                </div>
            </div>
    @endsection    
