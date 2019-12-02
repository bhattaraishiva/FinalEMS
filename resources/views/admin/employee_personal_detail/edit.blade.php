
@extends('layouts.app')

@section('page_title')
कर्मचारी
@endsection

@section('breadcum_title')
<li><a href="{{route('employeepersonaldetail.index')}}">कर्मचारी</a></li>

@endsection


@section('content')
<!-- right column -->
@if (count($errors) > 0)
<ul class="list-group">
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">
        {{$error}}
    </li>
    @endforeach
</ul>
@endif

<div class="box box-info" id="uniform-style">
    <div class="box-header with-border">
        <h3 class="box-title">व्यक्तिगत विवरण सम्पादन :{{$employee->first_name}} {{$employee->last_name}} </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post"action="{{route('employeepersonaldetail.update',['employee'=>$employee->id ])}}"  enctype="multipart/form-data" >
      @csrf @method('put') <div class="box-body">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-3">
                    <label for="inputEmail3">कर्मचारी संकेत् नम्बर </label>
                    <input type="text" class="form-control" id="employee_number" name="employee_number"
                        value="{{$employee->employee_number}}" required>
                </div>

                <div class="col-sm-3">
                    <label for="inputPassword3">पहिलो नाम (देवनागरि)</label>
                    <input class="form-control" type="text" name="fname" id="fname" value="{{$employee->first_name}}"
                        required>
                </div>

                <div class="col-sm-3">
                    <label for="name">बिचको नाम(देवनागरि) </label>
                    <input class="form-control" type="text" name="mname" id="mname" value="{{$employee->middle_name}}">
                </div>

                <div class="col-sm-3">
                    <label for="name">थर(देवनागरिमा) </label>
                    <input class="form-control" type="text" name="lname" id="lname" value="{{$employee->last_name}}"
                        required>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <label for="name">पहिलो नाम(अंग्रेजी ठूलो अक्षरमा)</label>
                    <input class="form-control" type="text" name="efname" id="efname"
                        value="{{$employee->eng_first_name}}" required style="text-transform: uppercase;">
                </div>

                <div class="col-sm-3">
                    <label for="name">बिचको नाम(अंग्रेजी ठूलो अक्षरमा)</label>
                    <input class="form-control" type="text" name="emname" id="emname"
                        value="{{$employee->eng_middle_name}}" style="text-transform: uppercase;">
                </div>

                <div class="col-sm-3">
                    <label for="name">थर(अंग्रेजी ठूलो अक्षरमा) </label>
                    <input class="form-control" type="text" name="elname" id="elname"
                        value="{{$employee->eng_last_name}}" required style="text-transform: uppercase;">
                </div>

                <div class="col-sm-3">
                    <label for="name">जन्म मिति </label>
                    <input class=" form-control nepali-calendar" id="nepaliDate5" required value="{{$employee->dob}}"
                        name="dob">
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <label for="name">लिङ्ग</label>
                    <select class="form-control" name="gender" id="gender">
                        @if ($employee->gender == 'm'){
                        <option selected value="m">पुरुष</option>
                        }
                        @elseif($employee->gender == 'f'){
                        <option selected value="f">महिला</option>
                        }

                        @endif
                        <option value="m">पुरुष</option>
                        <option value="f">महिला</option>
                        <option value="o">अन्य</option>
                    </select>
                </div>

                <div class="col-sm-3">
                    <label for="name">जाति </label>
                    <select class="form-control chosen" name="caste">
                        @if ($employee->caste == 'b'){
                        <option selected value="b">ब्राह्मण </option>
                        }
                        @elseif($employee->caste == 'd'){
                        <option selected value="d">दलित</option>
                        }
                        @elseif($employee->caste == 'j'){
                        <option selected value="j">जनजाती</option>
                        }
                        @elseif($employee->caste == 'c'){
                        <option selected value="c">छेत्री</option>
                        }
                        @elseif($employee->caste == 'ma'){
                        <option selected value="ma">मधेसि</option>
                        }
                        @elseif($employee->caste == 'mu'){
                        <option selected value="mu">मुस्लिम</option>
                        }
                        @endif
                        <option value="ब्राह्मण">ब्राह्मण </option>
                        <option value="छेत्री">छेत्री</option>
                        <option value="जनजाती">जनजाती</option>
                        <option value="दलित">दलित </option>
                        <option value="ma">मधेसि</option>
                        <option value="mu">मुस्लिम</option>
                        <option value="o">अन्य</option>

                    </select>
                </div>

                <div class="col-sm-3">
                    <label for="name">समुदाय </label>
                    <select class="form-control chosen" name="community">
                        @if ($employee->community == 't'){
                        <option selected value="t">तराई </option>
                        }
                        @elseif($employee->community == 'p'){
                        <option selected value="p">पहाड</option>
                        }
                        @elseif($employee->community == 'h'){
                        <option selected value="h">हिमाल</option>
                        }
                        @endif
                        <option value="t">तराई </option>
                        <option value="p">पहाड</option>
                        <option value="h">हिमाल</option>
                    </select>
                </div>

                <div class="col-sm-3 form-group">
                    <label for="name">नागरिकता नं:</label>
                    <input class="form-control" type="text" name="national_id" id="national_id"
                        value="{{$employee->national_id}}" required>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <label for="name">नागरिकता जारी मिति </label>

                    <input class="form-control" type="text" name="national_id_issue_date" id="nepaliDate6" required
                        value="{{$employee->national_id_issue_date}}" required>
                </div>

                <div class="col-sm-3">
                    <label for="name">नागरिकता जारी जिल्ला </label>
                    <select name="national_id_issue_district" id="national_id_issue_district"
                        class="form-control chosen">
                        <option value="{{$employee->national_id_issue_district_id}}" selected>{{$employee->address_info['district_name']}}</option>
                        @foreach ($districts as $district)
                        <option value="{{$district->district_id}}">{{$district->district_name}}</option>

                        @endforeach
                    </select>
                </div>

                <div class="col-sm-3">
                    <label for="name">फोटो </label>
                    <input type="text" value="{{$employee->image}}" hidden name="old_image">
                    <input class="form-control" type="file" name="image" id="image" onchange="readURL(this)">
                </div>

                <div class="col-sm-3" style="height:90px; width:90px; background-color: aliceblue;">
                    @if ($employee->image)
                    <img src="/{{$employee->image}}" alt="Image" style="height:90px;width:90px">
                    old

                    @endif
                    <img src="#" id="pic"> new
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <label for="name">मोबाइल नं: </label>
                    <input class="form-control" type="text" name="mobile_no" id="mobile_no" maxlength="10"
                        value="{{$employee->mobile_no}}" required>
                </div>
                <div class="col-sm-3">
                    <label for="name">इ-मेल ठेगाना</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{$employee->email}}"
                        required>
                </div>
            </div>
            <hr>
            <h3>हालको कार्यालय विवरण </h3>
            <div class="row">
                <div class="col-sm-2">
                    <label for="name">कर्मचारी प्रकार </label>
                    <select name="edit_employee_type" id="edit_employee_type"
                        class="form-control chosen">
                        @if ($employee_current_jobinfo[0]['employee_type'] == "naya")
                        <option value="naya" selected>नयाँ</option>
                        @elseif($employee_current_jobinfo[0]['employee_type'] == 'samayojan')
                        <option value="samayojan" selected>समायोजन</option>
                        @elseif($employee_current_jobinfo[0]['employee_type'] == 'karar')
                        <option value="karar" selected>करार</option>
                        @elseif($employee_current_jobinfo[0]['employee_type'] == 'kaamkaj')
                        <option value="kaamkaj" selected>कामकाज</option>
                        @endif
                        <option value="kaamkaj">कामकाज</option>
                        <option value="karar">करार</option>
                        <option value="samayojan">समायोजन</option>
                        <option value="naya">नयाँ</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="name">नियुक्ति मिति </label>
                    <input class="form-control" type="text" name="edit_appointed_date" id="nepaliDate9"
                        value="{{$employee_current_jobinfo[0]['appointed_date']}}" required>
                </div>
                <div class="col-sm-3">
                    <label for="name">कार्यालयमा हाजिर मिति </label>
                    <input class="form-control" type="text" name="edit_attendance_date" id="nepaliDate10"
                        value="{{$employee_current_jobinfo[0]['attendance_date']}}" >
                </div>
                @if ($employee_current_jobinfo[0]['employee_type'] == 'karar')
                <div class="col-sm-2">
                    <label for="name">करार सुरु मिती </label>
                    <input class="form-control" type="text" name="edit_karar_start_date" id="nepaliDate11"
                        value="{{$employee_current_jobinfo[0]['karar_start_date']}}" required>
                </div>
                <div class="col-sm-2">
                    <label for="name">करार अन्त्य मिती </label>
                    <input class="form-control" type="text" name="edit_karar_end_date" id="nepaliDate12"
                        value="{{$employee_current_jobinfo[0]['karar_end_date']}}" required>
                </div>
                @elseif($employee_current_jobinfo[0]['employee_type'] == 'naya')
                <div class="col-sm-2">
                    <label for="name">नया सिफारिस मिती </label>
                    <input class="form-control" type="text" name="edit_naya_sifaris_date" id="nepaliDate13"
                        value="{{$employee_current_jobinfo[0]['naya_sifaris_date']}}" required>
                </div>
                @endif
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <label for="name">सेवा </label>
                    <select name="edit_sewa" id="edit_sewa" class="form-control chosen dynamic"   data-dependent='edit_samuha_id'>
                        <option selected value="{{$employee_current_jobinfo[0]['sewa_id']}}">
                            {{$employee_current_jobinfo[0]->sewa['sewa_name']}}</option>
                        @foreach ($sewas as $sewa)
                        <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>

                        @endforeach
                    </select>
                </div>

                <div class="col-sm-3">
                    <label for="name">समूह </label>
                    <select name="edit_samuha" id="edit_samuha_id" class="form-control chosen dynamic"  data-dependent='edit_upasamuha_id'>
                        <option selected value="{{$employee_current_jobinfo[0]['samuha_id']}}">
                            {{$employee_current_jobinfo[0]->samuha['samuha_name']}}</option>
                            @foreach ($samuhas as $samuha)
                            <option value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>

                            @endforeach
                    </select>
                </div>

                <div class="col-sm-2">
                    <label for="name">उपसमूह </label>
                    <select name="edit_upasamuha" id="edit_upasamuha_id" class="form-control chosen">
                        <option selected value="{{$employee_current_jobinfo[0]['upasamuha_id']}}">
                            {{$employee_current_jobinfo[0]->upasamuha['upasamuha_name']}}</option>
                            @foreach ($upasamuhas as $upasamuha)
                            <option value="{{$upasamuha->id}}">{{$upasamuha->upasamuha_name}}</option>

                            @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="name">तह </label>
                    <select name="edit_taha" id="edit_taha" class="form-control chosen">
                        <option selected value="{{$employee_current_jobinfo[0]['taha_id']}}">
                            {{$employee_current_jobinfo[0]->taha['taha_name']}}</option>
                        @foreach ($tahas as $taha)
                        <option value="{{$taha->id}}">{{$taha['taha_name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="name">श्रेणी </label>
                    <select name="edit_shreni" id="edit_shreni" class="form-control chosen">
                        <option selected value="{{$employee_current_jobinfo[0]['shreni_id']}}">
                            {{$employee_current_jobinfo[0]->shreni['shreni_name']}}</option>
                        @foreach ($shrenis as $shreni)
                        <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="form-group col-md-3 ">
                    <label for="name">मन्त्रालय : <sup>*</sup></label>
                    <select name="edit_ministry" id="ministry_id" class="form-control  dynamic"
                        data-dependent='edit_karyalaya_id'>
                        <option selected value="{{$employee_current_jobinfo[0]->ministry['id']}}">
                            {{$employee_current_jobinfo[0]->ministry['ministry_name']}}
                        </option>
                        @foreach ($ministries as $ministry)
                        <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 ">
                    <div class="form-group">
                        <label for="name">निर्देशनालय: : <sup>*</sup></label>
                        <select name="edit_nirdeshanalaya" id="nirdeshanalaya_id" class="form-control ">
                            <option selected value="{{$employee_current_jobinfo[0]->nirdeshanalaya['id']}}">
                                {{$employee_current_jobinfo[0]->nirdeshanalaya['nir_name']}}</option>
                            @foreach ($nirdeshanalayas as $nirdeshanalaya)
                            <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="form-group">
                        <label for="name">कार्यालय : <sup>*</sup></label>
                        <select name="edit_karyalaya" id="edit_karyalaya_id" class="form-control  dynamic"
                            data-dependent="edit_pad_id" required>
                            <option selected value="{{$employee_current_jobinfo[0]->karyalaya['id']}}">
                                {{$employee_current_jobinfo[0]->karyalaya['kar_name']}}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="form-group">
                        <label for="name">पद : <sup>*</sup></label>
                        <select name="edit_pad" id="edit_pad_id" class="form-control" required>
                                <option selected value="{{$employee_current_jobinfo[0]->pad['id']}}">
                                        {{$employee_current_jobinfo[0]->pad['pad_name']}}
                                    </option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer form-group">
                {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
                <button type="submit" class=" form-control btn btn-info pull-right">सुरक्षित गर्नुहोस</button>
            </div>
            <!-- /.box-footer -->
    </form>
</div>
<!-- /.box -->

<!--/.col (right) -->
@endsection