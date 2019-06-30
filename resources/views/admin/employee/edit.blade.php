@extends('layouts.app')
@section('content')
@if (count($errors) > 0)
<ul class="list-group">
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">
        {{$error}}
    </li>
    @endforeach
</ul>
@endif

<div class="card card-default">
    <div class="card-header" id="uniform-style">
        कर्मचारी बिबरण अपडेट  गर्नुहोस
    </div>
    <div class="card-body" id="uniform-style">
        <form action="{{route('employee.update',['employee'=>$employee->id ])}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <div id="form-info">कर्मचारीको व्यक्तिगत बिबरण</div>

                <div class="row">
                    <div class="col-md-3">
                        <input type="text"  name="oldpad" hidden value="{{$employee->pad_id}}">
                        <input type="text"  name="employee_id" hidden value="{{$employee->id}}">

                        <label for="name">कर्मचारी संकेत् नम्बर </label>
                        <input class="form-control" type="text" name="employeenumber" id="employeenumber"
                            value="{{$employee->employee_number}}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">नागरिकता नं:</label>
                        <input class="form-control" type="text" name="national_id" id="national_id"
                            value="{{$employee->national_id}}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">मोबाइल नं:</label>
                        <input class="form-control" type="text" name="mobile_no" id="mobile_no"
                            value="{{$employee->mobile_no}}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">इ-मेल ठेगाना</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{$employee->email}}"
                            required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">पहिलो नाम(देवनागरिमा) </label>
                        <input class="form-control" type="text" name="fname" id="fname"
                            value="{{$employee->first_name}}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">बिचको नाम(देवनागरिमा) </label>
                        <input class="form-control" type="text" name="mname" id="mname"
                            value="{{$employee->middle_name}}">
                    </div>
                    <div class="col-md-3">
                        <label for="name">थर(देवनागरिमा) </label>
                        <input class="form-control" type="text" name="lname" id="lname" value="{{$employee->last_name}}"
                            required>
                    </div>

                    <div class="col-md-3">
                        <label for="name">पहिलो नाम(अंग्रेजी ठूलो अक्षरमा)</label>
                        <input class="form-control" type="text" name="efname" id="fname"
                            value="{{$employee->eng_first_name}}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">बिचको नाम(अंग्रेजी ठूलो अक्षरमा)</label>
                        <input class="form-control" type="text" name="emname" id="mname"
                            value="{{$employee->eng_middle_name}}">
                    </div>
                    <div class="col-md-3">
                        <label for="name">थर(अंग्रेजी ठूलो अक्षरमा) </label>
                        <input class="form-control" type="text" name="elname" id="lname"
                            value="{{$employee->eng_last_name}}" required>
                    </div>

                    <div class="col-md-3">
                        <label for="name">लिङ्ग</label>
                        <select class="form-control" name="gender" id="gender">
                            @if ($employee->gender=="m"){
                            <option selected value="m">पुरुष</option>
                            }

                            @elseif($employee->gender =="f")
                            <option selected value="f">महिला</option>
                            @else
                            <option selected value="o">अन्य</option>
                            @endif
                            <option value="m">पुरुष</option>
                            <option value="f">महिला</option>
                            <option value="o">अन्य</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="name">जन्म मिति </label>
                        <input class=" form-control nepali-calendar"  id="nepaliDate5" name="dob" value="{{$employee->dob}}" required>
                    </div>


                    <div class="col-md-3">
                        <label for="name">बुबाको नाम</label>
                        <input class="form-control" type="text" name="fathername" id="fathername"
                            value="{{$employee->father_name}}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">आमाको नाम</label>
                        <input class="form-control" type="text" name="mothername" id="mothername"
                            value="{{$employee->mother_name}}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">हजुरबुबाको नाम </label>
                        <input class="form-control" type="text" name="gfname" id="gfname"
                            value="{{$employee->grandfather_name}}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">हजुरआमाको नाम </label>
                        <input class="form-control" type="text" name="gmname" id="gmname"
                            value="{{$employee->grandmother_name}}" >
                    </div>
                    <div class="col-md-3">
                        <label for="name">पति/पत्नी नाम </label>
                        <input class="form-control" type="text" name="hwname" id="hwname"
                            value="{{$employee->spouse_name}}">
                    </div>
                </div>
                <div id="form-info">स्थायी ठेगाना </div>

                <div class="row">

                    <div class="form-group col-md-2">
                        <label for="name">प्रदेश :</label>
                        <select name="pradesh_id" id="pradesh_id" class="form-control input-lg dynamic"
                            data-dependent='district_id' required>
                            <option value="">प्रदेश चयन गर्नुहोस्:</option>
                            @foreach ($pradeshes as $pradesh)
                                <option value="{{$pradesh->pradesh_id}}">{{$pradesh->pradesh_name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">

                        <div class="form-group">
                            <label for="name">जिल्ला</label>
                            <select name="district_id" id="district_id" class="form-control input-lg dynamic" data-dependent="palika_id" required>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="name">पालिका</label>
                            <select name="palika_id" id="palika_id" class="form-control input-lg dynamic" required>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="name">वडा नं</label>
                            <select name="permanent_wardno" id="permanent_wardno" class="form-control input-lg dynamic">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>

                            </select>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <label for="name"> गाँउ / टोल</label>
                        <input class="form-control" type="text" name="permanent_tole" id="permanent_tole"
                            placeholder="गाँउ / टोल " required>
                    </div>
                </div>

                <div id="form-info">पत्राचार गर्ने ठेगाना</div>
                <div class="row">

                    <div class="form-group col-md-2">
                        <label for="name">प्रदेश :</label>
                        <select name="cpradesh_id" id="pradesh_id" class="form-control input-lg dynamic"
                            data-dependent='cdistrict_id' required>
                            <option value="">प्रदेश चयन गर्नुहोस्:</option>
                            @foreach ($pradeshes as $pradesh)
                                <option value="{{$pradesh->pradesh_id}}">{{$pradesh->pradesh_name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">

                        <div class="form-group">
                            <label for="name">जिल्ला</label>
                            <select name="cdistrict_id" id="cdistrict_id" class="form-control input-lg dynamic"
                                data-dependent="cpalika_id" required>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="name">पालिका</label>
                            <select name="cpalika_id" id="cpalika_id" class="form-control input-lg dynamic">
                            </select required>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="name">वडा नं</label>
                            <select name="current_wardno" id="current_wardno" class="form-control input-lg dynamic">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
    
                            </select>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <label for="name"> गाँउ / टोल</label>
                        <input class="form-control" type="text" name="current_tole" id="current_tole" placeholder="गाँउ / टोल "
                            required>
                    </div>
                </div>
                <div id="form-info">कार्यालय/पद बिबरण</div>
                <div class="row">

                    <div class="form-group col-md-3">
                        <label for="name">मन्तरालय चयन गर्नुहोस:</label>
                        <select name="ministry_id" id="ministry" class="form-control">
                            @foreach ($ministries as $ministry)
                                @if($employee->ministry_id == $ministry->id)
                                <option selected value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                                @else
                                <option value="">मन्तरालय चयन गर्नुहोस:</option>
                                <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">निर्देशनालय चयन गर्नुहोस:</label>
                            <select name="nirdeshanalaya" id="nirdeshanalaya" class="form-control">
                                <option value="">निर्देशनालय चयन गर्नुहोस:</option>

                                @foreach ($nirdeshanalayas as $nirdeshanalaya)
                                    @if($employee->nir_id == $nirdeshanalaya->id)
                                    <option selected value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                                    @else
                                    <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">कार्यालय चयन गर्नुहोस</label>
                            <select name="karyalaya" id="karyalaya" class="form-control">
                                <option value="">कार्यालय चयन गर्नुहोस:</option>

                                @foreach ($karyalayas as $karyalaya)
                                    @if($karyalaya->id == $employee->kar_id)
                                    <option selected value="{{$karyalaya->id}}">{{$karyalaya->kar_name}}</option>
                                    @else
                                    <option value="{{$karyalaya->id}}">{{$karyalaya->kar_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">पद चयन गर्नुहोस</label>
                            <select name="pad" id="pad" class="form-control">
                                @foreach ($allpads as $item)
                                @if($item->id == $employee->pad_id)
                                <option selected value="{{$item->id}}">{{$item->pad_name}}</option>
                                @endif
                                @endforeach

                                @foreach ($pads as $pad)

                                <option value="{{$pad->id}}">{{$pad->pad_name}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">सेवा </label>
                            <select name="sewa" id="sewa_id" class="form-control">
                                @foreach ($sewas as $sewa)
                                @if ($sewa->id== $employee->sewa_id)
                                <option selected value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>

                                @endif
                                <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>

                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">समुह</label>
                            <select name="samuha" id="samuha_id" class="form-control">
                                @foreach ($samuhas as $samuha)
                                @if ($samuha->id== $employee->samuha_id)
                                <option selected value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>

                                @endif
                                <option value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>

                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">उप-समुह</label>
                            <select name="upasamuha" id="upasamuha_id" class="form-control">
                                @foreach ($upasamuhas as $upasamuha)
                                @if ($upasamuha->id== $employee->upasamuha_id)
                                <option selected value="{{$upasamuha->id}}">{{$upasamuha->upasamuha_name}}</option>

                                @endif
                                <option value="{{$upasamuha->id}}">{{$upasamuha->upasamuha_name}}</option>

                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">तह चयन गर्नुहोस</label>
                            <select name="taha" id="taha" class="form-control">
                                @foreach ($tahas as $taha)
                                @if ($taha->id == $employee->taha_id)
                                <option selected value="{{$taha->id}}">{{$taha->taha_name}}</option>
                                @else
                                <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">श्रेणी चयन गर्नुहोस</label>
                            <select name="shreni" id="shreni" class="form-control">
                                @foreach ($shrenis as $shreni)
                                @if($shreni->id == $employee->shreni_id)
                                <option selected value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
                                @else
                                <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>




                    <div class="col-md-3">
                        <label for="name">नियुक्ती गरिएको मिति</label>
                        <input class="form-control" value="{{$employee->hire_date}}"  name="hdate"
                        class=" form-control nepali-calendar"  id="nepaliDate6">
                    </div>
                    <div class="col-md-3">
                        <label for="name">समायोजनमा पदस्थापन मिति </label>
                        <input class="form-control" value="{{$employee->adjustment_placement_date}}" name="adjustment_placement_date"
                        class=" form-control nepali-calendar"  id="nepaliDate7">
                    </div>
                    <div class="col-md-3">
                        <label for="name">हाजिरी मिती</label>
                        <input class="form-control" value="{{$employee->attendance_date}}" class=" form-control nepali-calendar"  id="nepaliDate8"
                            name="attendancedate" required>
                    </div>
                    <div class="col-md-3">
                        <label for="name">समायोजन पूर्व कार्यरतभए सो मिति </label>
                        <input class="form-control" value="{{$employee->before_adjustment_placement_date}}"  class=" form-control nepali-calendar"  id="nepaliDate9" name="before_adjustment_placement_date">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">कर्मचारीको पर्कार</label>
                            <select name="emp_type" id="emp_type" class="form-control">
                                <option @if($employee->emp_type == "काज") selected @endif value="काज">काज</option>
                                <option @if($employee->emp_type == "पदस्थापन") selected @endif value="पदस्थापन">पदस्थापन
                                </option>
                                <option @if($employee->emp_type == "नयाँ") selected @endif value="नयाँ">नयाँ</option>
                                <option @if($employee->emp_type == "कामकाज") selected @endif value="कामकाज">कामकाज
                                </option>
                                <option @if($employee->emp_type == "अस्थाई") selected @endif value="अस्थाई">अस्थाई
                                </option>
                                <option @if($employee->emp_type == "करार") selected @endif value="करार">करार</option>
                                <option @if($employee->emp_type == "अन्य") selected @endif value="अन्य">अन्य</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">स्थिति:</label>
                            <select name="emp_status" id="emp_status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-lg btn-success" type="submit" style="float:left">अपडेट </button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection