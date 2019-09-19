@extends('layouts.report_layout')
@section('document_report_title')
कर्मचारी रिपोर्ट
@endsection
@section('report_heading')

कर्मचारी
@endsection

@section('report_body')
@section('report_title')
कर्मचारी
@endsection

@section('back_button')
{{ route('employee.index') }}
@endsection

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
            <label for="name">मन्त्रालय :</label><span>{{$employee->ministry['ministry_name']}}</span>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">निर्देशनालय :</label><span>
                    {{$employee->nirdeshanalaya['nir_name']}}
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">कार्यालय :</label><span>
                    {{$employee->karyalaya['kar_name']}}

                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">तह / श्रेणी :</label><span>{{$employee->taha['taha_name']}} /
                    {{$employee->shreni['shreni_name']}}</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">सेवा /समुह/उप-समुह :</label><span>
                    @if ($sewas->count()>0)
                    @foreach ($sewas as $sewa)
                    @if ($sewa->id == $employee->sewa_id)
                    {{$sewa->sewa_name}}/

                    @endif
                    @endforeach
                    @endif
                    @if ($samuhas->count()>0)
                    @foreach ($samuhas as $samuha)
                    @if ($samuha->id == $employee->samuha_id)
                    {{$samuha->samuha_name}}/

                    @endif
                    @endforeach
                    @endif
                    @if ($upasamuhas->count()>0)
                    @foreach ($upasamuhas as $upasamuha)
                    @if ($upasamuha->id == $employee->upasamuha_id)
                    {{$upasamuha->upasamuha_name}}

                    @endif
                    @endforeach
                    @endif
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
        <thead id="table_head">
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
            <tr id="table_height">
                <td>{{$loop->iteration}}</td>
                <td>{{$allemployeerec->employee_activity}}</td>
                <td>
                    @if($allemployeerec->upgrade_date== 'null')
                    --
                    @else
                    {{$allemployeerec->upgrade_date}}
                    @endif

                </td>
                <td>
                    @if($allemployeerec->depart_date== 'null')
                    --
                    @else
                    {{$allemployeerec->depart_date}}
                    @endif
                </td>
                <td>{{$allemployeerec->pad['pad_name']}}</td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection