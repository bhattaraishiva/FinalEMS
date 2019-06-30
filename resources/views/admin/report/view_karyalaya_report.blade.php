@extends('layouts.report_layout')
@section('document_report_title')
कार्यालय रिपोर्ट
@endsection
@section('report_heading')

{{ $karyalaya->kar_name}} कार्यालय
@endsection

@section('report_body')
@section('report_title')
कार्यालय
@endsection

@section('back_button')
{{ route('karyalaya.index') }}
@endsection

<div class="form-group">
    <div id="form-info">कार्यालयको बिबरण</div>
    <div class="row">
        <div class="col-md-3">
            <label for="name">नाम:</label><span>{{ $karyalaya->kar_name}},{{$karyalaya->karyalaya_address}}
                [{{ $karyalaya->karyalaya_code}}]</span>
        </div>
        <div class="col-md-3">
            <label for="name"> संकेत् न:</label><span>{{$karyalaya->id}}</span>
        </div>

        <div class="form-group col-md-3">
            <label for="name">मन्त्रालय :</label><span>{{$karyalaya->ministry->ministry_name}}</span>

        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">निर्देशनालय :</label><span>
                    {{$karyalaya->nirdeshanalaya['nir_name']}}

                </span>


            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">दरबन्दि संख्या :</label><span>
                    {{$karyalaya->employee_number}}

                </span>


            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">रिक्त पद संख्या :</label><span>
                    {{$emptypad}}
                </span>


            </div>
        </div>

        {{-- <div class="col-md-3">
                <div class="form-group">
                    <label for="name">पद :</label><span>
                        @foreach ($karyalaya_employees as $karyalaya_employee)
                        <li>{{$karyalaya_employee->pad->pad_name}}</li>
        @endforeach
        </span>
    </div>
</div> --}}
</div>
<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th>क्रम सं</th>
            <th>पद</th>
            <th>तह</th>
            <th>सेवा</th>
            <th>समूह</th>
            <th>जम्मा</th>
        </tr>
    </thead>
    <tbody>

        @foreach($karyalaya_employees as $karyalaya_employee)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                @if ($karyalaya_employee->pad_id == null)
                -
                @else
                {{$karyalaya_employee->pad->pad_name}}
                @endif
            </td>
            <td>{{$karyalaya_employee->taha->taha_name}}</td>
            <td>{{$karyalaya_employee->sewas->sewa_name}}</td>
            <td>{{$karyalaya_employee->samuha->samuha_name}}</td>
            <td>
                @foreach ($karyalaya_all_pads as $karyalaya_all_pad)
                @if ($karyalaya_employee->pad_id == $karyalaya_all_pad->pad_id )
                {{$karyalaya_all_pad->total}}
                @break
                @else
                @endif
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection