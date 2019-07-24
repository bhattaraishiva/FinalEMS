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
{{ route('employeepersonaldetail.index') }}
@endsection

<div class="form-group" id="uniform-style">
    <div id="form-info">कर्मचारीको व्यक्तिगत बिबरण</div>
    <div class="row form-group">
        <div class="col-md-3 ">
            <label for="name">नाम:</label><span> {{$employee->personal_detail->first_name}}
                {{$employee->personal_detail->middle_name}}
                {{ $employee->personal_detail->last_name}}</span>
        </div>
        <div class="col-md-3">
            <label for="name"> संकेत् न:</label><span> {{$employee->employee_number}}</span>
        </div>
        <div class="col-md-3">
            <label for="name"> प्रदेश संकेत् न:</label><span> {{$employee->id}}</span>
        </div>
        <div class="col-md-3">
            <img src="/{{$employee->personal_detail->image}}" alt="Image" style="height:100px;width:100px;border-radius:2px;">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <label for="name">नागरिकता नं:</label><span>{{$employee->personal_detail->national_id}}</span>
        </div>
        <div class="col-md-3">
            <label for="name">मोबाइल नं:</label><span>{{$employee->personal_detail->mobile_no}}</span>
        </div>
        <div class="col-md-3">
            <label for="name">इ-मेल ठेगाना</label><span>{{$employee->personal_detail->email}}</span>
        </div>
        {{-- <div class="col-md-3">
            <label for="name">ठेगाना:</label><span>{{$employee->address_info->current_pradesh}}</span>
        </div> --}}
        <div class="col-md-3">
            <label for="name">लिङ्ग:</label><span>@if ($employee->personal_detail->gender=='m')
                पुरुष
                @elseif($employee->personal_detail->gender=='f')
                महिला
                @else
                अन्य
                @endif
            </span>
        </div>
        <div class="col-md-3">
            <label for="name">जन्म मिति :</label><span>{{$employee->personal_detail->dob}}</span>

        </div>


        <div class="col-md-3">
            <label for="name">बुबाको नाम :</label><span>{{$employee->family_info->father_name}}</span>
        </div>
        <div class="col-md-3">
            <label for="name">आमाको नाम:</label><span>{{$employee->family_info->mother_name}}</span>
        </div>
        <div class="col-md-3">
            <label for="name">हजुरबुबाको नाम :</label><span>{{$employee->family_info->grandfather_name}}</span>
        </div>

        <div class="col-md-3">
            <label for="name">हजुरआमाको नाम:</label><span>{{$employee->family_info->grandmother_name}}</span>
        </div>

        <div class="col-md-3">
            <label for="name">पति/पत्नी नाम:</label><span>{{$employee->family_info->spouse_name}}</span>
        </div>

    </div>
    <div id="form-info">हालको  कार्यालय  तथा पद बिबरण</div>
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
                    {{$employee->karyalaya['kar_name']}}[ {{$employee->karyalaya['karyalaya_address']}}]
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
            <label for="name">नियुक्ति मिति :</label><span>{{$employee->appointed_date}}</span>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">प्रकार  :</label><span>
                    
                    @if($employee->employee_type =='naya')
                    नयाँ
                    @elseif($employee->employee_type =='samayojan')
                    समायोजन
                    @elseif($employee->employee_type =='karar')
                    करार
                    @elseif($employee->employee_type =='kaam_kaaj')
                    काम काज
                    @endif

                </span>
            </div>
        </div>
    </div>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>सिन</th>
                <th>क्रियाकलाप</th>
                <th>क्रियाकलाप मिति </th>
                <th>कर्मचारी प्रकार </th>
                <th>कार्यालय </th>
                <th>मन्त्रालय</th>
                <th>पद</th>
                {{-- <th>Status</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($employee_allrecords as $employee_allrec)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    @if($employee_allrec->employee_activity=="saruwa")
                    सरुवा
                    @elseif($employee_allrec->employee_activity=="samayojan")
                    समायोजन
                    @elseif($employee_allrec->employee_activity == "padasthapan")
                    पदस्थापन
                    @elseif($employee_allrec->employee_activity == "baduwa")
                    बढुवा
                    @elseif($employee_allrec->employee_activity == "nilamban")
                    निलम्बन
                    @elseif($employee_allrec->employee_activity == "awakash")
                    अवकाश
                    @elseif($employee_allrec->employee_activity == "rajinama")
                    राजिनामा
                    @elseif($employee_allrec->employee_activity == "sangh_firta")
                    संघ फिर्ता
                    @elseif ($employee_allrec->employee_type == "naya")
                    नयाँ
                    @elseif($employee_allrec->employee_type == "karar")
                    करार
                    @elseif($employee_allrec->employee_type == "kaam_kaaj")
                    काम काज
                    @endif
                </td>
                <td> {{$employee_allrec->operation_date}}   </td>
                <td>
                        @if($employee_allrec->employee_type =="naya")
                        नयाँ
                        @elseif($employee_allrec->employee_type =='samayojan')
                        समायोजन
                        @elseif($employee_allrec->employee_type =='karar')
                        करार
                        @elseif($employee_allrec->employee_type =="kaam_kaaj")
                        काम काज
                        @endif
                </td>
                <td>{{$employee_allrec->karyalaya['kar_name']}} [{{$employee->karyalaya['karyalaya_address']}}]</td>
                <td>{{$employee_allrec->ministry['ministry_name']}}</td>
                <td>{{$employee_allrec->pad['pad_name']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection