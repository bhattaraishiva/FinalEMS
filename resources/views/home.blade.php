@extends('layouts.app')

    @section('content')

        
            <div class="card" id ="uniform-style">
                <div class="card-header">
                    ड्यासबोर्डमा स्वागत छ.</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                    तपाई लग इन हुनुहुन्छ!
                </div>
                  <div>
          <img src="{{asset('images/logo.svg')}}" alt="logo" style="background: transparent ;opacity: 0.4; margin-left: auto; margin-right: auto ;width: 40%; display: block;">
          @yield('watermark')
</div>
            </div>
    @endsection    
