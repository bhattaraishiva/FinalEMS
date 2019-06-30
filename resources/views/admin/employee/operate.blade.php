@extends('layouts.app')
@section('content')
@if (count($errors) > 0)
<ul class="list-group close">
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">
        {{$error}}
    </li>
    @endforeach
</ul>
@endif
<div class="card card-default" id="uniform-style">
    <div class="card-header">
        कर्मचारी बिबरण परिवर्तन गर्नुहोस
        <a href="#" class="btn btn-md btn-info" type="button" onclick="asd(1)" id="insert"
            style="float:right;">पदोन्नति/सरुवा(Upgrade/Transfer)</a>
        <a href="#" type="button" class="btn btn-md btn-success" onclick="asd(0)" id="insert"
            style="float:right;">सेवानिवृत्त(Leave)</a>
    </div>
    <div class="card-body">
        @include('includes.upgradeemployee')
        @include('includes.leaveemployee')
        <script type="text/javascript">
            window.onload = function() {
      
          document.getElementById("upgrade").style.display = "none";
          document.getElementById("leave").style.display = "none";
      
        };
     
        function asd(a) {
       
          if (a == 1) {
            document.getElementById("upgrade").style.display = "block";
            document.getElementById("leave").style.display = "none";
          } else {
            document.getElementById("leave").style.display = "block";
            document.getElementById("upgrade").style.display = "none";
          }
          
        }
        </script>
        {{-- {{ csrf_field() }} --}}
        @csrf
        <div class="form-group">
            <div id="form-info">कर्मचारीको व्यक्तिगत बिबरण</div>
            <div class="row">
                <div class="col-md-3">
                    <label for="name">कर्मचारीको नाम:</label><span>{{$employee->first_name}} {{$employee->middle_name}}
                        {{ $employee->last_name}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">कर्मचारी संकेत् नम्बर:</label><span>{{$employee->employee_number}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">ठेगाना:</label><span>{{$employee->address}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">लिङ्ग:</label><span>@if ($employee->gender=='m')
                        पुरुष
                        @elseif($employee->gender=='f')
                        महिला
                        @else
                        अन्य
                        @endif
                    </span>
                </div>
                <div class="col-md-3">
                    <label for="name">जन्म मिति :</label><span>{{$employee->dob}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">बुबाको नाम :</label><span>{{$employee->father_name}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">हजुरबुबाको नाम :</label><span>{{$employee->grandfather_name}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">पति/पत्नी नाम :</label><span>{{$employee->spouse_name}}</span>
                </div>
            </div>
            <div id="form-info">कार्यालय/पद बिबरण</div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="name">मन्तरालय :</label><span>{{$employee->ministry->ministry_name}}</span>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">निर्देशनालय :</label><span>
                            @foreach ($nirdeshanalayas as $nirdeshanalaya)
                            @if($employee->nir_id == $nirdeshanalaya->id)
                            {{$nirdeshanalaya->nir_name}}
                            @endif
                            @endforeach
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">कार्यालय :</label><span>

                            @foreach ($karyalayas as $karyalaya)
                            @if($karyalaya->id == $employee->kar_id)
                            {{$karyalaya->kar_name}}
                            @endif
                            @endforeach
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">तह :</label><span>{{$employee->taha->taha_name}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">श्रेणी :</label><span>{{$employee->shreni->shreni_name}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">पद :</label><span>
                            @foreach ($allpads as $pad)
                            @if($pad->id == $employee->pad_id)
                            {{$pad->pad_name}}
                            @else

                            @endif
                            @endforeach

                    </div>
                </div>

                <div class="col-md-3">
                    <label for="name">नियुक्ती मिति :</label><span>{{$employee->hire_date}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">समायोजनमा पदस्थापन
                        मिति:</label><span>{{$employee->adjustment_placement_date}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">हाजिरी मिती:</label><span>{{$employee->attendance_date}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">समायोजन पूर्व कार्यरतभए सो मिति
                        :</label><span>{{$employee->before_adjustment_placement_date}}</span>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">कर्मचारीको पर्कार :</label><span>@if ($employee->emp_type=='kaaj')
                            काज
                            @elseif($employee->emp_type=='padasthapan')
                            पदस्थापन
                            @elseif($employee->emp_type=='naya')
                            नयाँ
                            @elseif($employee->emp_type=='kaamkaaj')
                            कामकाज
                            @elseif($employee->emp_type=='asthai')
                            अस्थाई
                            @elseif($employee->emp_type=='karar')
                            करार
                            @else
                            अन्य
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection