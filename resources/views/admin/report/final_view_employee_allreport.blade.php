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
    <div class="row form-group" id="align-text">
        <div class="col-md-3 ">
            <label for="name" id="">नाम:</label><span  id="style_span"> {{$employee->personal_detail->first_name}}
                {{$employee->personal_detail->middle_name}}
                {{ $employee->personal_detail->last_name}}</span>
        </div>
        <div class="col-md-3">
            <label for="name"> संकेत् न:</label><span  id="style_span"> {{$employee->employee_number}}</span>
        </div>
        <div class="col-md-3">
            <label for="name"> प्रदेश संकेत् न:</label><span  id="style_span"> {{$employee->id}}</span>
        </div>
        <div class="col-md-3">
            <img src="/{{$employee->personal_detail->image}}" alt="Image"
                style="height:100px;width:100px;border-radius:2px;">
        </div>
    </div>
    <hr>
    <div class="row" id="align-text">
        <div class="col-md-3">
            <label for="name">नागरिकता नं:</label><span  id="style_span">{{$employee->personal_detail->national_id}}</span>
        </div>
        <div class="col-md-3">
            <label for="name">मोबाइल नं:</label><span  id="style_span">{{$employee->personal_detail->mobile_no}}</span>
        </div>
        <div class="col-md-3">
            <label for="name">इ-मेल ठेगाना</label><span  id="style_span">{{$employee->personal_detail->email}}</span>
        </div>
        {{-- <div class="col-md-3">
            <label for="name">ठेगाना:</label><span  id="style_span">{{$employee->address_info->current_pradesh}}</span>
    </div> --}}
    <div class="col-md-3">
        <label for="name">लिङ्ग:</label><span  id="style_span">@if ($employee->personal_detail->gender=='m')
            पुरुष
            @elseif($employee->personal_detail->gender=='f')
            महिला
            @else
            अन्य
            @endif
        </span>
    </div>
    <div class="col-md-3">
        <label for="name">जन्म मिति :</label><span  id="style_span">{{$employee->personal_detail->dob}}</span>
    </div>
    <div class="col-md-3">
        <label for="name">बुबाको नाम :</label><span  id="style_span">{{$employee->family_info->father_name}}</span>
    </div>
    <div class="col-md-3">
        <label for="name">आमाको नाम:</label><span  id="style_span">{{$employee->family_info->mother_name}}</span>
    </div>
    <div class="col-md-3">
        <label for="name">हजुरबुबाको नाम :</label><span  id="style_span">{{$employee->family_info->grandfather_name}}</span>
    </div>

    <div class="col-md-3">
        <label for="name">हजुरआमाको नाम:</label><span  id="style_span">{{$employee->family_info->grandmother_name}}</span>
    </div>

    <div class="col-md-3">
        <label for="name">पति/पत्नी नाम:</label><span  id="style_span">{{$employee->family_info->spouse_name}}</span>
    </div>

    <div class="col-md-3">
        <label for="name"> हालको ठेगाना :</label><span  id="style_span"> {{$employee->palika($employee->employee_id)[0]->palika_name}} - {{$employee->ward->current_wardno    }}, {{$employee->district($employee->employee_id)[0]->district_name}}</span>
    </div>

    <div class="col-md-3">
        <label for="name"> स्थायी  ठेगाना :</label><span  id="style_span"> {{$employee->permanent_palika($employee->employee_id)[0]->palika_name}} - {{$employee->ward->permanent_wardno}}, {{$employee->permanent_district($employee->employee_id)[0]->district_name}}</span>
    </div>

</div>
<div id="form-info">हालको कार्यालय तथा पद बिबरण</div>
<div class="row" id="align-text">
    <div class="form-group col-md-3">
        <label for="name">मन्त्रालय :</label><span  id="style_span">{{$employee->ministry['ministry_name']}}</span>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="name">निर्देशनालय :</label><span  id="style_span">
                @if ($employee->nirdeshanalaya['nir_name']== null)
                --
                @else
                {{$employee->nirdeshanalaya['nir_name']}}
                @endif
            </span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="name">कार्यालय :</label><span  id="style_span">
                {{$employee->karyalaya['kar_name']}}[ {{$employee->karyalaya['karyalaya_address']}}]
            </span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="name">तह / श्रेणी :</label><span  id="style_span">{{$employee->taha['taha_name']}} /
                {{$employee->shreni['shreni_name']}}</span>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="name">सेवा /समुह/उप-समुह :</label><span  id="style_span">
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
            <label for="name">पद :</label><span  id="style_span">
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
        <label for="name">नियुक्ति मिति :</label><span  id="style_span">{{$employee->appointed_date}}</span>
    </div>
    <div class="col-md-3">
        <div class="form-group">
    <label for="name">प्रकार :</label><span  id="style_span">
                @if($employee->employee_type =='naya')
                नयाँ
                               
                @elseif($employee->employee_type =='samayojan')
                समायोजन
                               
                @elseif($employee->employee_type =='karar')
                करार
                               
                @elseif($employee->employee_type =='kaam_kaj')
                काम काज
                
                
                @endif
            </span>
        </div>
    </div>
</div>
<div id="form-info">कार्यालयगत नोकरी विवरण </div>

<!-- <caption id="form-info">हालको कार्यालय तथा पद बिबरण</caption> -->
<table class="table table-hover table-bordered">
    <thead >
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
        <tr id="table_height">
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
            <td> {{$employee_allrec->operation_date}} </td>
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
<br>
<div id="form-info">कर्मचारीको शैक्षिक योग्यता विवरण</div>

<!-- <caption>कर्मचारीको शैक्षिक योग्यता विवरण </caption> -->
<table class="table table-hover table-bordered">
    <thead >
        <tr>
            <th>सि नं </th>
            <th>शैक्षिक योग्यताको तह</th>
            <th>संकाय </th>
            <th>मूल बिषय</th>
            <th>राष्ट्र </th>
            <th>शैक्षिक संस्था</th>
            <th>बोर्ड</th>
            <th>उत्रिण् साल </th>
            <th>प्रतिशत / श्रेणी </th>
        </tr>
    </thead>
    <tbody>
        @foreach($emp_edu_details as $emp_edu_detail)
        <tr id="table_height">
            <td>{{$loop->iteration}}</td>
            <td>
                {{$emp_edu_detail->edu_level}}
            </td>
            <td> {{$emp_edu_detail->stream}} </td>
            <td>
                {{$emp_edu_detail->major_sub}}
            </td>
            <td>{{$emp_edu_detail->country}}</td>
            <td>{{$emp_edu_detail->edu_institute}}</td>
            <td>{{$emp_edu_detail->board}}</td>
            <td>{{$emp_edu_detail->passed_year}}</td>
            <td>{{$emp_edu_detail->division}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<!-- <caption>बैदेशिक भ्रमण विवरण </caption> -->
<div id="form-info">बैदेशिक भ्रमण विवरण</div>

<table class="table table-hover table-bordered">
    <thead >
        <tr>
            <th>सि नं </th>
            <th>भ्रमणको विवरण</th>
            <th>राष्ट्र </th>
            <th>उदेश्य</th>
            <th>भ्रमणको अवधि </th>

        </tr>
    </thead>
    <tbody>
        @foreach($emp_foreign_tours as $emp_foreign_tour)
        <tr id="table_height">
            <td>{{$loop->iteration}}</td>
            <td>{{$emp_foreign_tour->ftour_info}}</td>
            <td>{{$emp_foreign_tour->ftour_country}}</td>
            <td>{{$emp_foreign_tour->ftour_objective}}</td>
            <td>{{$emp_foreign_tour->ftour_start_date}} देखि {{$emp_foreign_tour->ftour_end_date}} सम्म</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<!-- <caption>तालिम (३० कार्य दिन भन्दा बढी ) विवरण </caption> -->
<div id="form-info">तालिम (३० कार्य दिन भन्दा बढी ) विवरण </div>

<table class="table table-hover table-bordered">
    <thead >
        <tr>
            <th>सि नं </th>
            <th>तालिमको प्रकार</th>
            <th>तालिम दिने संस्था </th>
            <th>तालिम अवधि</th>
            <th>श्रेणी</th>
        </tr>
    </thead>
    <tbody>
        @foreach($emp_trainings as $emp_training)
        <tr id="table_height">
            <td>{{$loop->iteration}}</td>
            <td>{{$emp_training->training_type}}</td>
            <td>{{$emp_training->training_institute}}</td>
            <td>{{$emp_training->training_start_date}} देखि {{$emp_training->training_end_date}} सम्म</td>
            <td>{{$emp_training->training_division}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- <caption>अध्ययन  बिदा / असाधारण बिदा विवरण </caption> -->
<div id="form-info">अध्ययन  बिदा / असाधारण बिदा विवरण</div>

<table class="table table-hover table-bordered">
    <thead> 
        <tr>
            <th>सि नं </th>
            <th>बिदाको विवरण</th>
            <th>बिदाको अवधि </th>
        </tr>
    </thead>
    <tbody>
        @foreach($emp_leaves as $emp_leave)
        <tr id="table_height">
            <td>{{$loop->iteration}}</td>
            <td>{{$emp_leave->leave_type}}</td>
            <td>{{$emp_leave->leave_start_date}} देखि {{$emp_leave->leave_end_date}} सम्म</td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- <caption >पुरस्कार  /विभूषण /पदक /अन्यको विवरण </caption> -->
<div id="form-info">पुरस्कार  /विभूषण /पदक /अन्यको विवरण</div>

<table class="table table-hover table-bordered">
    <thead >
        <tr>
            <th>सि नं </th>
            <th>पुरस्कार  /विभूषण /पदक </th>
            <th>प्रदान गर्ने संस्था </th>
            <th>मिति</th>
        </tr>
    </thead>
    <tbody>
        @foreach($emp_motivations as $emp_motivation)
        <tr id="table_height">
            <td>{{$loop->iteration}}</td>
            <td>{{$emp_motivation->motivation_name}}</td>
            <td>{{$emp_motivation->motivation_provider}}</td>
            <td>{{$emp_motivation->motivation_date}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- <caption >निलम्बन/विभागीय /अन्य कारवाही सम्बन्धि विवरण </caption> -->
<div id="form-info">निलम्बन/विभागीय /अन्य कारवाही सम्बन्धि विवरण </div>

<table class="table table-hover table-bordered">
    <thead  >
        <tr>
            <th>सि नं </th>
            <th>कारबाही सम्बन्धि विवरण  </th>
            <th>कारवाही निर्णय मिति </th>
            <th>कारवाही लागुहुने मिति </th>
            <th>कारबाही समाप्त हुने मिति</th>
        </tr>
    </thead>
    <tbody>
        @foreach($emp_penalties as $emp_penalty)
        <tr id="table_height">
            <td>{{$loop->iteration}}</td>
            <td>{{$emp_penalty->penalty_desc}}</td>
            <td>{{$emp_penalty->penalty_decision_date}}</td>
            <td>{{$emp_penalty->penalty_start_date}}</td>
            <td>{{$emp_penalty->penalty_end_date}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection