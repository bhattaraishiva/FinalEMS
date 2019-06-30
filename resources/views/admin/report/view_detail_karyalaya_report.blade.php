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
                <label for="name">नाम:</label><span>{{ $karyalaya->kar_name}},{{$karyalaya->karyalaya_address}} [{{ $karyalaya->karyalaya_code}}]</span>
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
        <table class="table table-hover table-bordered">
            <thead style="font-size:20px">
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
                        <td>{{$karyalaya_employee->first_name}} {{$karyalaya_employee->middle_name}} {{$karyalaya_employee->last_name}}</td>
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
                
            </tbody>
        </table>

    </div>
@endsection