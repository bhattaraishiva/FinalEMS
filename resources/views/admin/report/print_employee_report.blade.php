@extends('layouts.app')

@section('content')

<div class="card card-default" id="uniform-style">
    <div class="card-header">
        कर्मचारी रिपोर्ट बिबरण।
        <a href="{{route('employeereport.print')}}" class="btn btn-md btn-info" style="float:right;">Print Report</a>


    </div>

    <div class="card-body">

        {{-- {{ csrf_field() }} --}}
        @csrf

        <div class="form-group" id="uniform-style">
            <div id="form-info">कर्मचारीको व्यक्तिगत बिबरण</div>
            <div class="row">
                <div class="col-md-3">
                    <label for="name">नाम:</label><span>{{$employee->first_name}} {{$employee->middle_name}}
                        {{ $employee->last_name}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name"> संकेत् न:</label><span>{{$employee->employee_number}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name"> प्रदेश संकेत् न:</label><span>{{$employee->id}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">नागरिकता नं:</label><span>{{$employee->national_id}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">मोबाइल नं:</label><span>{{$employee->mobile_no}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">इ-मेल ठेगाना</label><span>{{$employee->email}}</span>
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
                    <label for="name">आमाको नाम:</label><span>{{$employee->mother_name}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">हजुरबुबाको नाम :</label><span>{{$employee->grandfather_name}}</span>
                </div>
                <div class="col-md-3">
                    <label for="name">हजुरआमाको नाम:</label><span>{{$employee->grandmother_name}}</span>
                </div>

                <div class="col-md-3">
                    <label for="name">पति/पत्नी नाम:</label><span>{{$employee->spouse_name}}</span>
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
                            {{$employee->nirdeshanalaya->nir_name}}
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">कार्यालय :</label><span>
                            {{$employee->karyalaya->kar_name}}

                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">तह / श्रेणी :</label><span>{{$employee->taha->taha_name}} /
                            {{$employee->shreni->shreni_name}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">सेवा /समुह/उप-समुह :</label><span>
                            @foreach ($sewas as $sewa)
                            @if ($sewa->id == $employee->sewa_id)
                            {{$sewa->sewa_name}}/

                            @endif
                            @endforeach
                            @foreach ($samuhas as $samuha)
                            @if ($samuha->id == $employee->samuha_id)
                            {{$samuha->samuha_name}}/

                            @endif
                            @endforeach
                            @foreach ($upasamuhas as $upasamuha)
                            @if ($upasamuha->id == $employee->upasamuha_id)
                            {{$upasamuha->upasamuha_name}}

                            @endif
                            @endforeach
                            {{-- {{$employee->sewa}}/{{$employee->samuha_name}}/{{$employee->upasamuha_name}} --}}
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">पद :</label><span>
                            {{-- {{$employee->pad->pad_name}} --}}
                            @foreach ($allpads as $pad)
                            @if($pad->id == $employee->pad_id)
                            {{$pad->pad_name}}
                            @else

                            @endif
                            @endforeach
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="name">नियुक्ति मिति :</label><span>{{$employee->hire_date}}</span>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">पर्कार :</label><span> {{$employee->emp_type}}
                        </span>
                    </div>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>सिन</th>
                        <th>Activity</th>
                        <th>पदोन्नति मिति </th>
                        <th>सेवानिवृत्त मिति</th>
                        <th>पद</th>
                        {{-- <th>Status</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($allemployee_records as $allemployeerec)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$allemployeerec->employee_activity}}</td>
                        <td>{{$allemployeerec->upgrade_date}}</td>
                        <td>{{$allemployeerec->depart_date}}</td>
                        <td>{{$allemployeerec->pad->pad_name}}</td>
                        {{-- <td>
                                        @if ($allemployeerec->emp_status=='1')
                                        <span class="badge badge-success">Active</span>

                                        @else
                                        <span class="badge badge-warning">Inactive</span>

                                        @endif
                                    </td> --}}
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endsection