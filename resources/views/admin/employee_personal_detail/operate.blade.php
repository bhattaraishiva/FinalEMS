@extends('layouts.app')
@section('page_title')
कर्मचारी
@endsection

@section('breadcum_title')
<li><a href="{{route('employeepersonaldetail.index')}}">कर्मचारी</a></li>
@endsection
@section('form_title')
कर्मचारी बिबरण।
@endsection
@section('content')
<!-- Main content -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">कर्मचारी गतिविधि: </h3>
        <form action="{{route('employeeallrecord.storeActivity')}}" method="post">
            {{-- {{ csrf_field() }} --}}
            @csrf
            <input type="text" name="oldpad" hidden value="{{$employee[0]->pad_id}} {{$employee[0]->pad['pad_name']}}">
            <input type="text" name="employee_id" hidden value="{{$employee[0]->employee_id}}">
            <input type="text" name="employee_number" hidden value="{{$employee[0]->employee_number}}">
            <input type="text" name="employee_type" hidden value="{{$employee[0]->employee_type}}">

            <div style="float:right">
                <label for="name">मुख्य गतिविधि: </label>
                <select name="employee_activity" id="employee_activity" class="form-control chosen">
                    <option value="">मुख्य गतिविधि</option>
                    <option value="samayojan">समायोजन</option>
                    <option value="padasthapan">पदस्थापन</option>
                    <option value="saruwa">सरुवा</option>
                    <option value="baduwa">बढुवा</option>
                    <option value="nilamban">निलम्बन</option>
                    <option value="awakash">अवकाश</option>
                    <option value="rajinama">राजिनामा</option>
                    <option value="sangh_firta">संघ फिर्ता </option>
                </select>
                <label for="name">सहायक गतिविधि:</label>
                <select name="sec_employee_activity" id="sec_employee_activity" class="form-control chosen">
                    <option value=""> सहायक गतिविधि</option>
                    <option value="training">तालिम (३० कर्यदीन भन्दा बढी )</option>
                    <option value="foreign_tour"> वैदेशिक भ्रमण</option>
                    <option value="leave">अध्ययन /असाधारण बिदा </option>
                    <option value="motivation">पुरस्कार/ विभूषण/पदक</option>
                    <option value="penalty">निलम्बन /विभागीय कारबाही</option>
                </select>
            </div>
    </div>
    <h3 id="section_header3"> बिबरण परिवर्तन गर्नुहोस </h3>
    <h4 style="color:red;">* अंकित अनिवार्य छन्। </h4>
    <div id="samayojan_form" style="display:none">
        @include('admin.includes.major_operation.samayojan')
    </div>
    <div id="padasthapan_form" style="display:none">
        @include('admin.includes.major_operation.padasthapan')
    </div>
    <div id="saruwa_form" style="display:none">
        @include('admin.includes.major_operation.saruwa')
    </div>
    <div id="baduwa_form" style="display:none">
        @include('admin.includes.major_operation.baduwa')
    </div>
    <div id="nilamban_form" style="display:none">
        @include('admin.includes.major_operation.nilamban')
    </div>
    <div id="awakash_form" style="display:none">
        @include('admin.includes.major_operation.awakash')
    </div>
    <div id="rajinama_form" style="display:none">
        @include('admin.includes.major_operation.rajinama')
    </div>
    <div id="sangh_firta_form" style="display:none">
        @include('admin.includes.major_operation.sangh_firta')
    </div>

    <div id="training" style="display:none">
        @include('admin.includes.minor_operation.training')
    </div>
    <div id="foreign_tour" style="display:none">
        @include('admin.includes.minor_operation.foreign_tour')
    </div>
    <div id="leave" style="display:none">
        @include('admin.includes.minor_operation.leave')
    </div>
    <div id="motivation" style="display:none">
        @include('admin.includes.minor_operation.motivation')
    </div>
    <div id="penalty" style="display:none">
        @include('admin.includes.minor_operation.penalty')
    </div>

    <div>
        <input type="checkbox" name="confirmsave" id="confirmsave"> सबै विवरण सहि छन्।
        <button class=" form-control btn btn-success" id="saveactivity" type="submit" disabled>सुरक्षित
            गर्नुहोस</button>
    </div>
    </form>

    <br>
    <div class="form-group">
        <div id="section_header2">कर्मचारीको व्यक्तिगत बिबरण</div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="name">कर्मचारी संकेत् नम्बर:</label><span>{{$employee[0]->employee_number}}</span>
            </div>
            <div class="col-md-3">
                <label for="name">कर्मचारीको नाम:</label><span>{{$employee[0]->personal_detail['first_name']}}
                    {{$employee[0]->personal_detail['middle_name']}}
                    {{ $employee[0]->personal_detail['last_name']}}</span>
            </div>
            <div class="col-md-3">
                <label for="name">लिङ्ग:</label><span>@if ($employee[0]->personal_detail['gender']=='m')
                    पुरुष
                    @elseif($employee[0]->personal_detail['gender']=='f')
                    महिला
                    @else
                    अन्य
                    @endif
                </span>
            </div>
            <div class="col-md-3">
                <label for="name">जन्म मिति :</label><span>{{$employee[0]->personal_detail['dob']}}</span>
            </div>
            <div class="col-md-3">
                <label for="name">बुबाको नाम :</label><span>{{$employee[0]->family_info['father_name']}}</span>
            </div>
            <div class="col-md-3">
                <label for="name">हजुरबुबाको नाम
                    :</label><span>{{$employee[0]->family_info['grandfather_name']}}</span>
            </div>
            <div class="col-md-3">
                <label for="name">पति/पत्नी नाम :</label><span>{{$employee[0]->family_info['spouse_name']}}</span>
            </div>
        </div>
        <br>
        <div id="section_header2">कार्यालय/पद बिबरण</div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="name">कर्मचारीको पर्कार :</label><span>
                        @if ($employee[0]->employee_type == "kaam_kaaj")
                        कामकाज
                        @elseif($employee[0]->employee_type == "samayojan")
                        समायोजन
                        @elseif($employee[0]->employee_type == "naya")
                        नयाँ
                        @elseif($employee[0]->employee_type == "karar")
                        करार
                        @else
                        अन्य
                        @endif
                    </span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="name">सेवा :</label><span>{{$employee[0]->sewa->sewa_name}}</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="name">समूह :</label><span>{{$employee[0]->samuha->samuha_name}}</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="name">उपसमूह :</label><span>{{$employee[0]->upasamuha->upasamuha_name}}</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="name">तह :</label><span>{{$employee[0]->taha['taha_name']}}</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="name">श्रेणी :</label><span>{{$employee[0]->shreni['shreni_name']}}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">मन्तरालय :</label><span>{{$employee[0]->ministry->ministry_name}}</span>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="name">निर्देशनालय :</label><span>
                        {{$employee[0]->nirdeshanalaya['nir_name']}}
                        {{-- @foreach ($nirdeshanalayas as $nirdeshanalaya)
                            @if($employee[0]->nir_id == $nirdeshanalaya->id)
                            {{$nirdeshanalaya->nir_name}}
                        @endif
                        @endforeach --}}
                    </span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="name">कार्यालय :</label><span>
                        {{$employee[0]->karyalaya->kar_name}}
                        {{-- @foreach ($karyalayas as $karyalaya)
                            @if($karyalaya->id == $employee[0]->kar_id)
                            {{$karyalaya->kar_name}}
                        @endif
                        @endforeach --}}
                    </span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="name">पद :</label><span>
                        {{-- {{$employee[0]->pad->pad_name}} --}}
                        @foreach ($allpads as $pad)
                        @if($pad->id == $employee[0]->pad_id)
                        {{$pad->pad_name}}
                        @else
                        @endif
                        @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <label for="name">नियुक्ती मिति :</label><span>{{$employee[0]->appointed_date}}</span>
            </div>
            <div class="col-md-3">
                <label for="name">हाजिरी मिती:</label><span>{{$employee[0]->attendance_date}}</span>
            </div>
        </div>
    </div>
</div>

@endsection