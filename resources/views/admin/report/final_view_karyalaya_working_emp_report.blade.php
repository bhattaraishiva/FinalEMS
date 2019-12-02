@extends('layouts.report_layout')

@section('document_report_title')
कार्यालय बिस्तृत रिपोर्ट
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
            <label for="name">नाम:</label>
            <span id="style_span">{{ $karyalaya->kar_name}},{{$karyalaya->karyalaya_address}}
            </span>
        </div>

        <div class="form-group col-md-3">
            <label for="name">मन्त्रालय :</label><span id="style_span">{{$karyalaya->ministry->ministry_name}}</span>

        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">निर्देशनालय :</label>
                <span id="style_span">
                    {{$karyalaya->nirdeshanalaya['nir_name']}}
                </span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">दरबन्दि संख्या :</label>
                <span id="style_span">
                    {{$karyalaya->employee_number}}
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">कार्यरत संख्या :</label>
                <span id="style_span">
                    {{$karyalaya_employees ->count()}}
                </span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">रिक्त पद संख्या :</label>
                <span id="style_span">
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
<p style="text-decoration:underline;font-size:large">कार्यरत कर्मचारीको विवरण </p>
<table class="table table-hover table-bordered">
    <thead >
        <tr>
            <td>क्रम सं</td>
            <td>नाम</td>
            <td>संकेत न </td>
            <td>पद</td>
            <td>तह/श्रेणी </td>
            <td>सेवा</td>
            <td>समूह</td>
            <td>नियुक्ति मिति </td>
            <td>हाजिर मिति </td>
            <td>प्रकार </td>
        </tr>
    </thead>

    <tbody>
        @if(! $karyalaya_employees->count() > 0 )
        <tr>NO any data !!</tr>

        @else
        @foreach($karyalaya_employees as $karyalaya_employee)
        <tr id="table_height">
            <td>{{$loop->iteration}}</td>
            <td>{{$karyalaya_employee->personal_detail['first_name']}}
                {{$karyalaya_employee->personal_detail['middle_name']}}
                {{$karyalaya_employee->personal_detail['last_name']}}
            </td>
            <td>{{$karyalaya_employee->personal_detail['employee_number']}}</td>
            <td>
                @if ($karyalaya_employee->pad_id == null)
                -
                @else
                {{$karyalaya_employee->pad['pad_name']}}
                @endif
            </td>
            <td>
                @if ($karyalaya_employee->taha_id == null)
                -
                @else
                {{$karyalaya_employee->taha['taha_name']}}
                @endif
                /
                @if ($karyalaya_employee->shreni_id == null)
                -
                @else
                {{$karyalaya_employee->shreni['shreni_name']}}

                @endif
            </td>
            <td>
                @if ($karyalaya_employee->sewa_id == null)
                -
                @else
                {{$karyalaya_employee->sewa['sewa_name']}}
                @endif
            </td>
            <td>
                @if ($karyalaya_employee->samuha_id == null)
                -
                @else
                {{$karyalaya_employee->samuha['samuha_name']}}
                @endif
            </td>
            <td>{{$karyalaya_employee->before_samayojan_or_kamkaj_appointed_date->before_pradesh_attendance_date    }}</td>
            <td>{{$karyalaya_employee->attendance_date}}</td>
            <td>
                @if ($karyalaya_employee->employee_type == 'naya')
                नयाँ
                @elseif($karyalaya_employee->employee_type == 'samayojan')
                समायोजन
                @elseif($karyalaya_employee->employee_type == 'karar')
                करार
                @elseif($karyalaya_employee->employee_type == 'kaam_kaj')
                काम काज
                @endif

        </tr>
        @endforeach

        @endif

    </tbody>
    {{-- <thead style="font-size:20px">
        <tr>
            <td rowspan="2" id="report-table-head">क्रम सं</td>
            <td rowspan="2" id="report-table-head">पद</td>
            <td rowspan="2" id="report-table-head">तह</td>
            <td rowspan="2" id="report-table-head">सेवा</td>
            <td rowspan="2" id="report-table-head">समूह</td>
            <td rowspan="2" id="report-table-head">जम्मा</td>
            <td colspan="7">कर्मचारी पद पूर्ति अवस्था </td>
        </tr>
        <tr>
            <td>कर्मचारीको नाम</td>
            <td>संकेत न</td>
            <td>तह</td>
            <td>समायोजनमा पदस्थापन मिति</td>
            <td>हाजिरी मिति</td>
            <td>समायोजन पूर्व कार्यरतभए सो मिति</td>
            <td>कार्यरत मध्ये अन्य तहमा समायोजन</td>
        </tr>
    </thead>
    <tbody>
        @foreach($karyalaya_employees as $karyalaya_employee)
        <tr id="table_height">
            <td>{{$loop->iteration}}</td>
    <td>
        @if ($karyalaya_employee->pad_id == null)
        -
        @else
        {{$karyalaya_employee->pad['pad_name']}}
        @endif
    </td>
    <td>{{$karyalaya_employee->taha['taha_name']}}</td>
    <td>{{$karyalaya_employee->sewas['sewa_name']}}</td>
    <td>{{$karyalaya_employee->samuha['samuha_name']}}</td>
    <td>
        @foreach ($karyalaya_all_pads as $karyalaya_all_pad)
        @if ($karyalaya_employee->pad_id == $karyalaya_all_pad->pad_id )
        {{$karyalaya_all_pad->total}}
        @break
        @else
        @endif
        @endforeach
    </td>
    <td>{{$karyalaya_employee->first_name}} {{$karyalaya_employee->middle_name}}
        {{$karyalaya_employee->last_name}}</td>
    <td>{{$karyalaya_employee->employee_number}}</td>
    <td>{{$karyalaya_employee->taha->taha_name}}</td>
    <td>{{$karyalaya_employee->adjustment_placement_date}}</td>
    <td>{{$karyalaya_employee->attendance_date}}</td>
    <td>
        @if ($karyalaya_employee->before_adjustment_placement_date == null)
        -
        @else
        {{$karyalaya_employee->before_adjustment_placement_date}}
        @endif
    </td>
    <td>-</td>

    </tr>
    @endforeach

    </tbody> --}}
</table>

</div>
@endsection